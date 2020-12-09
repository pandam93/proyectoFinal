<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('short_name');
            //$table->unsignedBigInteger('professor_id')->nullable();
            $table->unsignedBigInteger('classroom_id');
        });

        Schema::table('subjects', function (Blueprint $table) {
            //$table->foreign('professor_id')->references('id')->on('users');

            $table->foreign('classroom_id')->references('id')->on('classrooms');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
