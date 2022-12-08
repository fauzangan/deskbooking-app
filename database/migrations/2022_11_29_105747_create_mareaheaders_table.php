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
        Schema::create('mareaheaders', function (Blueprint $table) {
            $table->id('intareaheaderid');
            $table->String('txtareaname');//intAreaDetaiId
            $table->boolean('bitactive')->default(1);
            $table->String('txtfilename')->nullable();
            $table->foreignId('intlocationid');
            $table->foreign('intlocationid')->references('intlocationid')->on('mlocations')->onDelete('cascade');
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
