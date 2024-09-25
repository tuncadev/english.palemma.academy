<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('phrase_id')->nullable(); // For phrases page
            $table->unsignedBigInteger('practice_id')->nullable(); // For practice page
            $table->unsignedBigInteger('quiz_id')->nullable(); // For quiz page
            $table->boolean('checkbox_state')->nullable(); // For phrase checkboxes
            $table->string('input_value')->nullable(); // For quiz inputs
            $table->string('dropdown_value')->nullable(); // For practice dropdowns
            $table->integer('finished')->default(0);
            $table->timestamps();

            // Foreign key constraints (if needed)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_progress');
    }
}
