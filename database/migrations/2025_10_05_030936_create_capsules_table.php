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
        Schema::create('capsules', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('capsule_id', 36)->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title', 255);
            $table->text('message')->nullable();
            $table->dateTime('release_date');
            $table->enum('status', ['draft', 'locked', 'delivered','expired'])->default('draft');
            $table->boolean('is_private')->default(true);
            $table->boolean('password_protected')->default(false);
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsules');
    }
};
