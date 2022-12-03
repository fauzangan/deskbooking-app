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
        Schema::create('mareaheader', function (Blueprint $table) {
            $table->id('intAreaHeaderId');
            $table->String('txtAreaName');
            $table->boolean('bitActive');
            $table->String('txtFileName');
            $table->foreignId('intLocationId');
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
        Schema::dropIfExists('mareas');
    }
};
