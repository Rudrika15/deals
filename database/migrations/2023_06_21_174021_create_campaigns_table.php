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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('detail');
            $table->integer('userId');
            $table->string('price');
            $table->string('photo');
            $table->string('rule')->nullable();
            $table->string('eligibleCriteria')->nullable();
            $table->string('targetGender')->nullable();
            $table->string('targetAgeGroup')->nullable();
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('applyForLastDate')->nullable();
            $table->string('task')->nullable();
            $table->string('maxApplication')->nullable();
            $table->string('status')->default('Active');
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
        Schema::dropIfExists('campaigns');
    }
};
