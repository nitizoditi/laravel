<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizAttemptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id');
            $table->integer('user_id');
            $table->integer('current_question_sequence');
            $table->time('quiz_attempt_starttime');
            $table->time('quiz_attempt_endtime');
            $table->time('quiz_breaktime_start');
            $table->time('quiz_breaktime_end');
            $table->string('activation_code', 50);
            $table->string('answer', 50);
            $table->string('remember_token');
            $table->integer('attempt_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_attempts');
    }
}
