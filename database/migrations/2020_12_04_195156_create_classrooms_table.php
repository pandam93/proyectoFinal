<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('short_name');
            $table->integer('year');
            $table->unsignedBigInteger('tutor_id')->nullable();            
            $table->unsignedBigInteger('delegado_id')->nullable();
        });

        Schema::table('classrooms', function (Blueprint $table) {
            $table->foreign('tutor_id')->references('id')->on('users');

            $table->foreign('delegado_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
