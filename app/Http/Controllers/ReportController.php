<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public array|Collection $records;
     public int $totalPrice = 0 ;
    public function orderReport()
    {

        $this->records = Order::with(['restaurant' , 'menuItems'])
            ->orderBy('created_at', 'desc')
            ->get();


//       Order::with(['menuItems' => function ($q){
//           $this->totalPrice =  $q->sum('menu_items.price');
//        }])->get();




        if (session()->has('records_bill_search')) {
            $this->records = session('records_bill_search');
        }
        if (session()->has('total_bill_search')) {
            $this->totalPrice = session('total_bill_search');
        }


        return view('admin.report.order')
            ->with(['records' => $this->records , 'totalPrice' => $this->totalPrice]);
    }
}
