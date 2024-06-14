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
        Schema::create('my_offer_qr_codes', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('buyerId')->nullable();
            $table->string('offerId');
            $table->string('qr');
            $table->string('status');
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
        Schema::dropIfExists('my_offer_qr_codes');
    }
};
