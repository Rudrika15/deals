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
        Schema::table('influencer_profiles', function (Blueprint $table) {
            $table->string('publicLocation')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pinCode')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('influencer_profiles', function (Blueprint $table) {
            //
        });
    }
};
