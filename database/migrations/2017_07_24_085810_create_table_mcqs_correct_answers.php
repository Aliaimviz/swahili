<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMcqsCorrectAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("mcqs_correct_answers", function($table) {
            $table->increments('answer_id');
            $table->integer('mcq_id');
        });

        \DB::unprepared('ALTER TABLE `mcqs_correct_answers` DROP PRIMARY KEY, ADD PRIMARY KEY (  `answer_id` ,  `mcq_id` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
