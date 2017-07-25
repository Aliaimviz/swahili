<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizs', function (Blueprint $table) {
            $table->increments('week_id')->unsigned();
            $table->integer('blank_id')->unsigned(); //course id
            $table->integer('mcq_id')->unsigned();
            $table->integer('match_id')->unsigned();
            $table->timestamps();
            //$table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');            
        });
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
