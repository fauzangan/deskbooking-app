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
        Schema::create('treservations', function (Blueprint $table) {
            $table->id('intReservationId');
            $table->String('txtBookingTime');
            $table->date('dtReservation');
            $table->boolean('bitActive');
            $table->String('txtInserted');
            $table->boolean('bitCheckin');
            $table->boolean('bitCheckout');
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
        Schema::dropIfExists('treservations');
    }
};
