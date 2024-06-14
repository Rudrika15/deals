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
        Schema::create('typedetails', function (Blueprint $table) {
            $table->id();
            $table->integer('typeId');
            $table->string('photo');
            $table->string('photoHeight');
            $table->string('photoWidth');
            $table->longText('message');
            $table->string('messageTop');
            $table->string('messageBottom');
            $table->string('messageColor');
            $table->string('messageFontFamily');
            $table->string('messageFontSize');
            $table->string('poster');
            $table->string('posterHeight');
            $table->string('posterWidth');
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
        Schema::dropIfExists('typedetails');
    }
};
