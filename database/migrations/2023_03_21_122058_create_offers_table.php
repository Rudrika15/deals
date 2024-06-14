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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('poster');
            $table->string('fontSize');
            $table->string('fontFamily');
            $table->string('fontColor');
            $table->string('noOfProduct');
            $table->string('posterHeight');
            $table->string('posterWidth');
            $table->string('titlePositionTop');
            $table->string('titlePositionLeft');
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
        Schema::dropIfExists('offers');
    }
};
