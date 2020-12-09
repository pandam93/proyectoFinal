<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('body');
            $table->unsignedBigInteger('professor_id');
            $table->unsignedBigInteger('student_id');
            $table->string('category');
            $table->timestamps();
        });
        
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('professor_id')->references('id')->on('users');

            $table->foreign('student_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
