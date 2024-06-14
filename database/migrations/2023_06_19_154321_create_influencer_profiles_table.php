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
        Schema::create('influencer_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('contactNo')->nullable();
            $table->longText('address')->nullable();
            $table->longText('about')->nullable();
            $table->integer('categoryId')->nullable();
            $table->string('status')->default('Active');
            $table->string('is_featured')->default('no');
            $table->string('is_trending')->default('no');
            $table->string('is_brandBeansVerified')->default('no');
            $table->string('publicLocation')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pinCode')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('instagramUrl')->nullable();
            $table->string('instagramFollowers')->nullable();
            $table->string('youtubeChannelUrl')->nullable();
            $table->string('youtubeSubscriber')->nullable();
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
        Schema::dropIfExists('influencer_profiles');
    }
};
