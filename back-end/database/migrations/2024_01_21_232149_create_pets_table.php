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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('adoption_status');
            $table->string('gender');
            $table->date('birth_date');
            $table->integer('age');
            $table->string('breed');
            $table->string('color');
            $table->longText('description');
            $table->string('display_image')->nullable();
            $table->string('vaccine_name')->nullable();
            $table->date('initial_vaccine_date')->nullable();
            $table->date('booster_date')->nullable();
            $table->date('expiration_vaccine_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
