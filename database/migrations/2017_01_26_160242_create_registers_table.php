<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('batch');
            $table->string('roll_no');
            $table->integer('phone');
            $table->integer('chest_no')->default(0);
            $table->integer('score')->default(0);
            $table->string('email');
            $table->string('gender');
            $table->string('event_one');
            $table->string('event_two');
            $table->string('event_three');
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
        Schema::dropIfExists('registers');
    }
}
