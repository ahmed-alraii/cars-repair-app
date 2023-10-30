<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $buyer_type
 */
class BuyCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'lot_number',
        'client_name' ,
        'client_phone' ,
        'total_price' ,
        'shipping_price' ,
        'advance_amount' ,
        'buy_date' ,
        'arrival_date' ,
        'car_name' ,
        'car_model' ,
        'car_color' ,
        'car_quality_number' ,
        'car_brand' ,
        'car_vin' ,
        'notes',
        'car_code',
        'buyer_type',
        'status',
    ];
}
