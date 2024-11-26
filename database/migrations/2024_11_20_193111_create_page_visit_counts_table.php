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
        Schema::create('page_visit_counts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('visitor_id')->constrained('visitors')->onDelete('cascade'); // Visitor reference
            $table->text('url');
            $table->integer('visit_count')->default(1); // Number of visits
            $table->timestamp('last_visited_at')->nullable(); // Timestamp of the most recent visit
            $table->timestamps(); // Created_at and updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_visit_counts');
    }
};
