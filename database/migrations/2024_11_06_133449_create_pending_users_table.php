<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pending_users', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id')->unique();
            $table->string('transaction_id');
            $table->string('email');
            $table->integer('status')->default(1); // 'pending - 1', 'complete - 0'
            $table->timestamp('expiration')->default(DB::raw("(DATETIME(CURRENT_TIMESTAMP, '+1 day'))"));
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_users');
    }
};
