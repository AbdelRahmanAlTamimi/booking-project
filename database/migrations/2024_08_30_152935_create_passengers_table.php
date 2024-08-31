<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->increments('passenger_id'); 
            $table->unsignedInteger('user_id'); 
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('passengers');
    }
};
