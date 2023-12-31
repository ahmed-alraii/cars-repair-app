<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' ,
        'model' ,
        'color' ,
        'quality_number' ,
        'brand' ,
        'vin' ,
        'notes',
        'container_id',
        'code'
    ];


    public function container(): BelongsTo
    {
        return $this->belongsTo(Container::class);
    }


    public function bills(): HasMany
    {
        return $this->hasMany(Bill::class);
    }
}
