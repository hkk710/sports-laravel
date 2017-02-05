<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCricketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricket', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teamname');
            $table->string('name');
            $table->string('batch');
            $table->string('roll_no');
            $table->bigInteger('phone');
            $table->integer('score')->default(0);
            $table->string('email');
            $table->string('gender');
            $table->string('player2');
            $table->string('player3');
            $table->string('player4');
            $table->string('player5');
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
        Schema::dropIfExists('cricket');
    }
}
