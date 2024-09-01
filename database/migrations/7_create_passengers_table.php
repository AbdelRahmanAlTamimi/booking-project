<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('passport_number');
            $table->timestamps();

            $table->foreign('booking_id')->references('id')->on('bookings');
        });
    }

    public function down()
    {
        Schema::dropIfExists('passengers');
    }
};