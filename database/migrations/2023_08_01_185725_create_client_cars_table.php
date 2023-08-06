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
        Schema::create('client_cars', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_phone')->nullable();
            $table->decimal('sell_price' , 8 , 3);
            $table->date('show_date');
            $table->date('sell_date');
            $table->string('car_name');
            $table->string('car_model');
            $table->string('car_color');
            $table->string('car_quality_number');
            $table->string('car_brand');
            $table->string('car_vin');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_cars');
    }
};
