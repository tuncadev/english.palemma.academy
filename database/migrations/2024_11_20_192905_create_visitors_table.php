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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('visitor_token')->unique(); // Unique identifier for the visitor
            $table->string('ip_address', 45)->nullable(); // Store IPv4/IPv6, nullable for privacy compliance
            $table->text('user_agent')->nullable(); // Browser fingerprinting details
            $table->timestamps(); // Created_at and updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
