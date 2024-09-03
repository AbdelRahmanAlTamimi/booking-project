<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_id');
            $table->string('seat_number');
            $table->enum('class', ['economy', 'business', 'first']);
            $table->boolean('is_available')->default(true);
            $table->timestamps();

            $table->foreign('flight_id')->references('id')->on('flights');
        });
    }

    public function down()
    {
        Schema::dropIfExists('seats');
    }
};