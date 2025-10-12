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
        Schema::create('capsule_media', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('media_id', 36)->unique();
            $table->uuid('capsule_id');
            $table->foreign('capsule_id')->references('id')->on('capsules')->cascadeOnDelete();
            $table->string('file_path', 500);
            $table->enum('file_type', ['image', 'video', 'document', 'audio']);
            $table->bigInteger('file_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsule_media');
    }
};
