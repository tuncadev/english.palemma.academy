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
        Schema::create('page_views', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('visitor_id')->constrained('visitors')->onDelete('cascade'); // Visitor reference
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade'); // Logged-in user (optional)
            $table->text('url');
            $table->text('referrer_url')->nullable();
            $table->string('device')->nullable(); // Extracted from user-agent
            $table->string('browser')->nullable(); // Extracted from user-agent
            $table->string('os')->nullable(); // Extracted from user-agent
            $table->timestamps(); // Created_at and updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_views');
    }
};
