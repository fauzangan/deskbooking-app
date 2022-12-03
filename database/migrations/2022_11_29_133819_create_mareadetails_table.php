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
            $table->id('intAreaDetaiId');
            $table->String('txtDeskName');
            $table->String('txtStatus');
            $table->boolean('bitActive');
            $table->foreignId('intAreaHeaderId');
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
