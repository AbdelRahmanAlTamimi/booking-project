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
        Schema::create('flights', function (Blueprint $table) {
            // Use increments for the primary key
            $table->increments('flight_id'); 
            $table->string('from_location')->nullable();
            $table->string('to_location')->nullable();
            $table->dateTime('departure_datetime')->nullable();
            $table->dateTime('arrival_datetime')->nullable();
            $table->time('duration')->nullable();
            $table->integer('available_seats')->nullable();
            $table->unsignedInteger('plane_id'); 
            $table->foreign('plane_id')->references('plane_id')->on('planes')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
