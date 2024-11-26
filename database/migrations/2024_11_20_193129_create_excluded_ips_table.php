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
        Schema::create('excluded_ips', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->boolean('block_range')->default('false');
            $table->string('ip_address', 45)->unique(); // IP address to exclude
            $table->string('reason')->nullable(); // Optional reason for excluding this IP
            $table->timestamps(); // Created_at and updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excluded_ips');
    }
};
