<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number');
            $table->unsignedBigInteger('departure_airport_id');
            $table->unsignedBigInteger('arrival_airport_id');
            $table->unsignedBigInteger('aircraft_id');
            $table->decimal('base_price', 10, 2);
            $table->integer('capacity');
            $table->timestamps();

            $table->foreign('departure_airport_id')->references('id')->on('airports');
            $table->foreign('arrival_airport_id')->references('id')->on('airports');
            $table->foreign('aircraft_id')->references('id')->on('aircraft');
        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
};