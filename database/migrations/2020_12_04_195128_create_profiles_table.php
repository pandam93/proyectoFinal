<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('last_name');
            $table->string('phone');
            $table->enum('gender',['male','female'])->default('male');
            $table->string('address');
            $table->string('city')->default('navalmoral de la mata');
            $table->string('state')->default('caceres');
            $table->string('zip')->default('10300');
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        Schema::table('profiles', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //$table->dropForeign('user_id');
        Schema::dropIfExists('profiles');
    }
}
