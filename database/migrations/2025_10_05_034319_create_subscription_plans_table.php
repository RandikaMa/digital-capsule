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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('plan_id', 36)->unique();
            $table->string('name', 100);
            $table->decimal('price_monthly', 8, 2);
            $table->decimal('price_yearly', 8, 2);
            $table->unsignedBigInteger('storage_limit');
            $table->integer('max_capsules')->nullable();
            $table->integer('max_duration_years');
            $table->json('features')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
