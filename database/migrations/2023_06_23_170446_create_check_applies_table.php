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
        Schema::create('check_applies', function (Blueprint $table) {
            $table->id();
            $table->integer('campaignId');
            $table->integer('userId');
            $table->string('file');
            $table->string('fileType')->nullable();
            $table->string('status')->default('Pending');
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('check_applies');
    }
};
