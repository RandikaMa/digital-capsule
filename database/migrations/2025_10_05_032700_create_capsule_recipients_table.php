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
        Schema::create('capsule_recipients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('capsule_id');
            $table->foreign('capsule_id')->references('id')->on('capsules')->cascadeOnDelete();
            $table->string('recipient_email', 150);
            $table->string('recipient_name', 150);
            $table->enum('delivery_method', ['email', 'public_link', 'social_share'])->default('email');
            $table->dateTime('delivered_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsule_recipients');
    }
};
