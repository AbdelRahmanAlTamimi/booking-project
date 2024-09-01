<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('flight_id');
            $table->unsignedBigInteger('flight_schedule_id');
            $table->date('booking_date');
            $table->enum('status', ['confirmed', 'cancelled']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('flight_id')->references('id')->on('flights');
            $table->foreign('flight_schedule_id')->references('id')->on('flight_schedules');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};