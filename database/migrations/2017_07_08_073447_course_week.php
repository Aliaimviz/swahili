<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourseWeek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekCourses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsign(); //course id
            $table->integer('lesson_id')->unsign();
            $table->string('title');
            $table->longText('description');
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
        Schema::dropIfExists('weekCourses');
    }
}
