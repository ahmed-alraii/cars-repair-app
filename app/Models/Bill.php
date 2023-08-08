<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'bill_type_id',
        'price',
        'notes',
        'company_name',
        'company_phone'
    ];


    public function billType()
    {
        return $this->belongsTo(BillType::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

}
