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
        Schema::create('passbooks', function (Blueprint $table) {
            $table->id();
            $table->integer('resellerId');
            $table->string('userId');
            $table->string('mobileNumber');
            $table->string('amount')->nullable();
            $table->string('package')->nullable();
            $table->string('status')->default('Pending');
            $table->date('date');
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
        Schema::dropIfExists('passbooks');
    }
};
