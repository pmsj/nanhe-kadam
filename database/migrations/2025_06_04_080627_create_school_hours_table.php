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
        Schema::create('school_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_schedule_id');
            $table->foreign('school_schedule_id')
                    ->references('id')->on('school_schedules')
                    ->onDelete('cascade');
            $table->string('day_of_week')->nullable(); 
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_hours');
    }
};
