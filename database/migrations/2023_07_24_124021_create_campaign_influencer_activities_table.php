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
        Schema::create('campaign_influencer_activities', function (Blueprint $table) {
            $table->id();
            $table->integer('campaignId');
            $table->integer('influencerId');
            $table->string('status')->default('pending');
            $table->string('paymentStatus')->default('pending');
            $table->integer('amount')->nullable();
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
        Schema::dropIfExists('campaign_influencer_activities');
    }
};
