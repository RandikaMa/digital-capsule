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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('payment_id', 36)->unique();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->uuid('subscription_id')->nullable();
            $table->foreign('subscription_id')->references('id')->on('user_subscriptions')->nullOnDelete();
            $table->decimal('amount', 8, 2);
            $table->string('currency', 10);
            $table->enum('payment_method', ['stripe', 'paypal', 'bank']);
            $table->string('transaction_id', 255)->nullable();
            $table->enum('status', ['pending', 'completed', 'failed', 'refunded'])->default('pending');
            $table->dateTime('paid_at')->nullable();

            $table->timestamps();
            $table->index(['user_id', 'subscription_id']);
            $table->index('transaction_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
