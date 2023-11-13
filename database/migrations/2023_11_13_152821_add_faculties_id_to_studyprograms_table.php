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
        Schema::table('studyprograms', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Faculty::class)
            ->nullable()
            ->after('id')
            ->references('id')
            ->on('faculties')
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('studyprograms', function (Blueprint $table) {
            $table->dropColumn('faculty_id');
        });
    }
};
