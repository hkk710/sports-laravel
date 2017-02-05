<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event');
            $table->string('gender');
            $table->boolean('relay')->default(false);
            $table->timestamps();
        });
        DB::table('events')->insert(
          ['event' => '100mtr', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '200mtr', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '400mtr', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '800mtr', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '1500mtr', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '5000mtr', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '10000mtr', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '110mtr hurdles', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '400mtr hurdles', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '4x100mtr relay', 'gender' => 'male', 'relay' => true]
        );
        DB::table('events')->insert(
          ['event' => '4x400mtr relay', 'gender' => 'male', 'relay' => true]
        );
        DB::table('events')->insert(
          ['event' => 'long jump', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => 'high jump', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => 'triple jump', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => 'shot put', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => 'javelin throw', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => 'Hammer throw', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => 'Discuss throw', 'gender' => 'male']
        );
        DB::table('events')->insert(
          ['event' => '100mtr', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => '200mtr', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => '400mtr', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => '800mtr', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => '1500mtr', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => '100mtr hurdles', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => 'medley relay', 'gender' => 'female', 'relay' => true]
        );
        DB::table('events')->insert(
          ['event' => '4x100mtr relay', 'gender' => 'female', 'relay' => true]
        );
        DB::table('events')->insert(
          ['event' => 'Triple jump', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => 'long jump', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => 'high jump', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => 'discuss throw', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => 'hammer throw', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => '	javelin throw', 'gender' => 'female']
        );
        DB::table('events')->insert(
          ['event' => 'shot put', 'gender' => 'female']
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
