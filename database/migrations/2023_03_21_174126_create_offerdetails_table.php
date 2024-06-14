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
        Schema::create('offerdetails', function (Blueprint $table) {
            $table->id();
            $table->integer('offerId');
            $table->string('positionLeft');
            $table->string('positionBottom');
            $table->string('imageHeight');
            $table->string('imageWidth');
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
        Schema::dropIfExists('offerdetails');
    }
};
