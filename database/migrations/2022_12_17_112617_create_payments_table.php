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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('card_id');
            $table->string('bankName')->nullable();
            $table->string('accountHolderName')->nullable();
            $table->string('accountNumber')->nullable();
            $table->string('accountType')->nullable();
            $table->string('ifscCode')->nullable();
            $table->string('upidetail')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
