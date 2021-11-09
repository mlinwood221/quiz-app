<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('expert')->default(false);
            $table->boolean('novice')->default(false);
            $table->boolean('advanced')->default(false);
            $table->boolean('local_celebrity')->default(false);
            $table->boolean('newbie')->default(false);
            $table->boolean('gamer_life')->default(false);
            $table->boolean('couch_potato')->default(false);
            $table->boolean('around_the_world')->default(false);
            $table->boolean('got_x_factor')->default(false);
            $table->boolean('world_cup_winner')->default(false);
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
        Schema::dropIfExists('badges');
    }
}
