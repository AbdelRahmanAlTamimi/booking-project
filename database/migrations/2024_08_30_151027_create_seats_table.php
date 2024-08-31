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
        Schema::create('seats', function (Blueprint $table) {
            $table->increments('seat_id');
            $table->unsignedInteger('flight_id'); 
            $table->string('seat_number')->nullable(); 
            $table->enum('seat_class', ['Economy', 'Business', 'First'])->nullable(); 
            $table->foreign('flight_id')->references('flight_id')->on('flights')->onDelete('cascade');    
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
