<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('aircraft', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->unique();
            $table->string('model');
            $table->string('manufacturer');
            $table->integer('total_seats');
            $table->integer('economy_seats');
            $table->integer('business_seats');
            $table->integer('first_class_seats');
            $table->date('manufacture_date');
            $table->date('last_maintenance_date');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aircrafts');
    }
};