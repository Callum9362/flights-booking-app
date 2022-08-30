<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('departing_gate');
            $table->string('arriving_gate');
            $table->unsignedBigInteger('airline_id');
            $table->foreign('airline_id')->references('id')->on('airlines');
            $table->unsignedBigInteger('departing_airport_id');
            $table->foreign('departing_airport_id')->references('id')->on('airports');
            $table->unsignedBigInteger('arriving_airport_id');
            $table->foreign('arriving_airport_id')->references('id')->on('airports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
