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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();                      // e.g. "Nursery"
            $table->text('description')->nullable();     // Rich text or summary
            $table->string('age_group')->nullable();     // e.g. "2.5 - 3.5 years"
            $table->string('duration')->nullable();      // e.g. "1 year"
            $table->string('image_path')->nullable();    // Store image filename/path
            $table->boolean('is_active')->default(false); // For publish/draft toggle
            $table->unsignedTinyInteger('order')->default(0);        // For custom sort
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
