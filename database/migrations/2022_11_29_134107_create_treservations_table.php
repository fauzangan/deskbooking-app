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
            $table->id('intreservationid');
            $table->date('dtreservation');
            $table->boolean('bitactive')->default(true);
            $table->string('txtinserted');
            $table->foreignId('intareadetailid');
            $table->foreign('intareadetailid')->references('intareadetailid')->on('mareadetails');
            $table->String('txtreservationstatus')->default("reserved");
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
