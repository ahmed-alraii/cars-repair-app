<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buy_cars', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->nullable();
            $table->string('client_phone')->nullable();
            $table->decimal('total_price' , 8 , 3)->nullable();
            $table->decimal('shipping_price' , 8 , 3)->nullable();
            $table->decimal('advance_amount' , 8 , 3)->nullable();
            $table->date('buy_date');
            $table->date('arrival_date')->nullable();
            $table->integer('buyer_type');
            $table->string('car_name')->nullable();
            $table->string('car_model')->nullable();
            $table->string('car_color')->nullable();
            $table->string('car_quality_number')->nullable();
            $table->string('car_brand')->nullable();
            $table->string('car_vin');
            $table->string('lot_number');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_cars');
    }
};
