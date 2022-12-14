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
        Schema::create('mareadetails', function (Blueprint $table) {
            $table->id('intareadetailid');
            $table->String('txtdeskname');
            $table->String('txtstatus');
            $table->boolean('bitactive')->default(1);
            $table->foreignId('intareaheaderid');
            $table->foreign('intareaheaderid')->references('intareaheaderid')->on('mareaheaders');
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
        Schema::dropIfExists('mareadetails');
    }
};
