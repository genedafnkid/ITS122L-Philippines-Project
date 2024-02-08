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
        Schema::create('adopters', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('phone_number');
            $table->date('birth_date');
            $table->integer('age');
            $table->string('occupation');
            $table->string('living_arrangement');
            $table->string('housing_type');
            $table->integer('family_members');
            $table->integer('children_count');
            $table->longText('pet_experience');
            $table->longText('current_pets');
            $table->longText('previous_pets');
            $table->longText('reasons_to_adopt');
            $table->longText('pet_preferences');
            $table->string('display_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopters');
    }
};
