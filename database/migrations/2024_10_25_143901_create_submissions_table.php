<?php
// database/migrations/xxxx_xx_xx_create_submissions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address')->nullable();  // Stores the IP address if available
            $table->string('session_id');              // Stores the session ID as a fallback
            $table->json('form_data'); // Stores the form data as JSON
            $table->string('response_status');
            $table->string('response_message');
            $table->string('response_body');
            $table->timestamps();                      // Timestamps for record creation and updates
        });
    }

    public function down()
    {
        Schema::dropIfExists('submissions');
    }
}
