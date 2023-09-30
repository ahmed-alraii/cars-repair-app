<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name' ,
        'client_phone' ,
        'sell_price' ,
        'show_date' ,
        'sell_date' ,
        'car_name' ,
        'car_model' ,
        'car_color' ,
        'car_quality_number' ,
        'car_brand' ,
        'car_vin' ,
        'notes',
        'car_code'
    ];
}
