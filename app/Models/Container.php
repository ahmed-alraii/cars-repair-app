<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Container extends Model
{
    use HasFactory;

    protected $fillable = [
        'container_name' ,
        'container_number' ,
        'bill_number' ,
        'arrival_date' ,
        'notes'
    ];


    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
