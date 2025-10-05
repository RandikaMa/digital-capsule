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
        Schema::create('client_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('user_id')->unique();
            $table->string('name',150);
            $table->string('email',150)->unique();
            $table->string('password',255);
            $table->string('avatar',255)->nullable();
            // keep plan_id as uuid nullable; add FK in a later migration after subscription_plans exists
            $table->uuid('plan_id')->nullable();
            $table->bigInteger('storage_used')->default(0);
            $table->timestamp('last_login_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_users');
    }
};
