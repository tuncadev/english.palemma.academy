<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('webhook_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id')->unique();
            $table->string('transaction_id');
            $table->string('ip_address')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->decimal('amount', 10, 2);
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->string('status')->default('pending'); // 'pending', 'success', 'failure'
            $table->json('response')->nullable(); // to store raw response data if needed
            $table->string('failure_reason')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('webhook_transactions');
    }
};
