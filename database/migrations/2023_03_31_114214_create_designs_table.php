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
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->integer('slugId')->nullable();
            $table->integer('userId');
            $table->string('mediaType');
            $table->integer('category');
            $table->integer('userId');
            $table->string('sourcePath');
            $table->string('isPremium');
            $table->string('title');
            $table->string('previewPath');
            $table->integer('sequence')->nullable()->default(0);
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('designs');
    }
};
