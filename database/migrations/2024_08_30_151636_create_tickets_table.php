<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('ticket_id'); 
            $table->unsignedInteger('passenger_id'); 
            $table->unsignedInteger('seat_id');
            $table->enum('status', ['booked', 'cancelled', 'pending'])->nullable();
            $table->float('price')->nullable();
            $table->timestamp('booking_date')->nullable();

            // Define foreign key constraints
            $table->foreign('passenger_id')->references('seat_id')->on('seats')->onDelete('cascade');
            $table->foreign('seat_id')->references('seat_id')->on('seats')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
