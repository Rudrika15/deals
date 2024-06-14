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
        Schema::create('campaign_influencer_activity_steps', function (Blueprint $table) {
            $table->id();
            $table->integer('campaignInfluencerActivityId');
            $table->integer('campaignId');
            $table->integer('influencerId');
            $table->integer('stepId');
            $table->string('status')->default('Active');
            $table->string('uploadActivityPhoto')->nullable();
            $table->string('uploadActivityLink')->nullable();
            $table->string('brandApproved')->default('Pending');
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
        Schema::dropIfExists('campaign_influencer_activity_steps');
    }
};
