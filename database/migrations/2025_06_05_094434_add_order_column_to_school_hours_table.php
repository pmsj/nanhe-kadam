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
        Schema::table('school_hours', function (Blueprint $table) {
             $table->unsignedTinyInteger('order')->default(1)->after('day_of_week');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('school_hours', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
};
