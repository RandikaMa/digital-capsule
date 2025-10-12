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
        Schema::create('capsule_logs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('capsule_id');
            $table->foreign('capsule_id')->references('id')->on('capsules')->cascadeOnDelete();
            $table->text('action');
            $table->foreignId('performed_by')->nullable();
            $table->foreign('performed_by')->references('id')->on('users')->nullOnDelete();
            $table->dateTime('performed_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsule_logs');
    }
};
