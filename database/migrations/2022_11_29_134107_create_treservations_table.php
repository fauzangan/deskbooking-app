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
            $table->String('txtbookingtime');
            $table->date('dtreservation');
            $table->boolean('bitactive');
            // $table->foreignId('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->string('txtinserted');
            $table->foreignId('intareaid');
            $table->foreign('intareaid')->references('intareadetailid')->on('mareadetails');
            $table->boolean('bitcheckin');
            $table->boolean('bitcheckout');
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
