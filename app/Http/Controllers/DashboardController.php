<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Booking;
use App\Models\Car;
use App\Models\ClientCar;
use App\Models\Container;
use App\Models\MenuItem;
use App\Models\Order;
use App\Models\Rent;
use App\Models\Restaurant;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $cars = Car::all()->count();
        $clientCars = ClientCar::all()->count();
        $containers = Container::all()->count();
        $bills = Bill::all()->count();
        $restaurants = Car::all()->count();

        return view('dashboard' ,
            compact('restaurants' , 'cars' , 'clientCars' , 'containers' , 'bills'));
    }
}
