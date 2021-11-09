<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_ids');
            $table->string('title');
            $table->string('slug');
            $table->string('type');
            $table->string('image')->nullable();
            $table->string('headline')->nullable();
            $table->text('description')->nullable();
            $table->integer('completions')->default(0);
            $table->integer('average')->default(0);
            $table->integer('min_score')->default(0);
            $table->integer('author_id')->default(1);
            $table->integer('users_taking')->default(100);
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
        Schema::dropIfExists('quizzes');
    }
}
