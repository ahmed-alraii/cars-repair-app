<?php

namespace App\Http\Controllers;

use App\Helpers\StoreFileTrait;
use App\Models\MenuItem;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    use StoreFileTrait;

    private string $path;

    public function __construct()
    {
        $this->path = env('RESTAURANT_IMAGE_PATH');
    }


    public function index()
    {
        $records = Restaurant::paginate(5);

        return view('restaurant.index' , compact('records'));
    }

    public function indexCards()
    {
        $records = Restaurant::all();
        return view('restaurant.index_cards' , compact('records') );
    }


    public function create()
    {
        return view('restaurant.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $restaurant =  Restaurant::create($data);
        $image_name = $this->storeImage($request , $restaurant , $this->path);
        $restaurant->image = $image_name;
        $restaurant->save();
        return redirect()->route('_restaurants.index' , app()->getLocale());
    }


    public function show(Restaurant $restaurant)
    {
        //
    }

    public function edit(Request $request)
    {
        $id =  $request->route()->parameter('_restaurant');
        $restaurant = Restaurant::find($id);
        return view('restaurant.edit', ['record' => $restaurant]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $id =  $request->route()->parameter('_restaurant');
        $restaurant = Restaurant::find($id);
        $image_name = $this->storeImage($request , $restaurant , $this->path);
        $data['image'] = $image_name;
        $restaurant->update($data);
        return redirect()->route('_restaurants.index' , app()->getLocale());
    }


    public function destroy(Request $request)
    {
        $id =  $request->route()->parameter('_restaurant');
        $restaurant = Restaurant::find($id);
        if( $restaurant->image !== 'default_img.png'){
            File::delete($this->path . $restaurant->image);
        }

        $restaurant->delete();
        return redirect()->route('_restaurants.index' , app()->getLocale());
    }
}
