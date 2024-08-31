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
        Schema::create('planes', function (Blueprint $table) {
            $table->increments('plane_id'); 
            $table->unsignedInteger('plane_type_id'); 
            $table->foreign('plane_type_id')->references('plane_type_id')->on('plane_types')->onDelete('cascade'); 
            $table->enum('status', ['active', 'inactive'])->nullable(); 
            $table->integer('total_seats')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planes');
    }
};
