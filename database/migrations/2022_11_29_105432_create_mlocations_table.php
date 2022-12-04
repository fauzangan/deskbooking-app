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
        Schema::create('mlocations', function (Blueprint $table) {
            $table->id('intLocationId');
            $table->String('txtLocationName');
            $table->boolean('bitActive')->default(1);
            $table->foreignId('intSiteId');
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
        Schema::dropIfExists('mlocations');
    }
};
