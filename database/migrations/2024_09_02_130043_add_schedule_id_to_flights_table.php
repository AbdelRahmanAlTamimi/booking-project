<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('flights', function (Blueprint $table) {
        $table->unsignedBigInteger('schedules_id')->nullable();
        $table->foreign('schedule_id')->references('id')->on('flight_schedules')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('flights', function (Blueprint $table) {
        $table->dropForeign(['schedule_id']);
        $table->dropColumn('schedule_id');
    });
}
};
