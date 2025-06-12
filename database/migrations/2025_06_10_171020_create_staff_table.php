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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation')->nullable(); // e.g. Teacher, Caretaker, Admin
            $table->string('qualification')->nullable();
            $table->string('experience')->nullable();   // e.g., "5 years"
            $table->text('bio')->nullable();
            // Optional relationship with users table
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            // To mark who is actively displayed
            $table->boolean('is_active')->default(false);
            $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
