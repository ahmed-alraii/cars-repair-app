<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Restaurant;
use App\Models\User;
use App\Notifications\OrderSent;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Api\V2010\Account\MessageInstance;
use Twilio\Rest\Client;

class OrderController extends Controller
{
    public function index()
    {
        $records = Order::with('orderStatus')->orderBy('created_at' , 'desc')->paginate(10);
        if(auth()->user()->role->name === 'Employee'){
            $restaurants = $this->getEmployeeRestaurant();
            $records = Order::where('restaurant_id' , $restaurants->id)
                ->where('order_status_id' , 1) // status : new order
                ->with('orderStatus')->orderBy('created_at' , 'desc')->paginate(10);
        }

        return view('order.index')->with(['records' => $records]);
    }


    private function getEmployeeRestaurant() {
        return Restaurant::with('users')
            ->whereHas('users', function($query) {
                $query->where('user_id', auth()->id() );
            })->get()->first();
    }


    /**
     * @throws ConfigurationException
     * @throws TwilioException
     */
    public function sendOrder(Request $request)
    {
        $data= $request->all();
        $order = Order::create($data);

        $users = User::where('role_id',  User::$EMPLOYEE)
        ->with('restaurant' , function ($q) use ($order){
            $q->where('restaurants.id' , $order->restaurant_id);
        })->get();

        $this->addOrderItems($order , $data);
        Cart::destroy();




        Notification::send($users, new OrderSent($order->id));
        $phone = '+96877303270';
        $code = '+968';
        $body = "Order Number : " . $order->id . " - Table Number : " . $order->table_number;
        foreach ($users as $user){
            $this->whatsappNotification($code . $user->phone ,$body );
        }

        return redirect()->route('restaurants_cards' , app()->getLocale() )->with('message' , 'Order Sent Successfully');
    }

    /**
     * @throws ConfigurationException
     * @throws TwilioException
     */
    private function whatsappNotification(string $phone , $body): MessageInstance
    {
        $sid    = env("TWILIO_AUTH_SID");
        $token  = env("TWILIO_AUTH_TOKEN");
        $from= env("TWILIO_WHATSAPP_FROM");
        $twilio = new Client($sid, $token);

        return $twilio->messages->create("whatsapp:$phone",["from" => "whatsapp:$from", "body" => $body]);
    }

    private function addOrderItems($order ,$data): void{
    foreach($data['cart'] as $items) {
        $items = json_decode($items);
        foreach ($items as $item) {
            $newItem = new MenuItem();
            $newItem->id = $item->id;
            $order->menuItems()->attach($newItem, ['quantity' => $item->qty , 'price' => $item->price]);

        }
    }
}


    public function show(Request $request)
    {
        $id =  $request->route()->parameter('order');
        $order = Order::find($id);
        $notificationId = $request->query('notification_id');
        $this->markAsRead($notificationId);
        $orderStatuses = OrderStatus::where('name' , '!=' , 'Pending')->get();
       return view('order.show' , ['record' => $order , 'orderStatuses' => $orderStatuses]);
    }


    private function markAsRead($id): void
    {
        $notification = auth()->user()->unreadNotifications()->where('id', $id)->first();
        if ($notification) {
            $notification->markAsRead();
        }
    }

    public function markAllAsRead(): RedirectResponse
    {
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $id =  $request->route()->parameter('order');
        $order = Order::find($id);
        $data = $request->only('order_status_id');
        $order->update($data);
        return redirect()->route('orders.index' , app()->getLocale());
    }
}
