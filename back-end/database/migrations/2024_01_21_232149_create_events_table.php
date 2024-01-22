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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->dateTime('post_date');
            $table->string('event_type');
            $table->string('display_image')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->dateTime('created_date');
            $table->dateTime('modified_date')->nullable();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
