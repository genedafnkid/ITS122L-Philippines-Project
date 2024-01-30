<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('adoption_applications', function (Blueprint $table) {
            $table->id();
            $table->longText('comment');
            $table->string('status');
            $table->dateTime('meet_date')->nullable();
            $table->dateTime('review_date')->nullable();
            $table->dateTime('results_date')->nullable();
            $table->unsignedBigInteger('applicant_id');
            $table->unsignedBigInteger('pet_id');
            $table->timestamps();

            $table->foreign('applicant_id')->references('id')->on('adopters');
            $table->foreign('pet_id')->references('id')->on('pets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoption_applications');
    }
};
