<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsHasTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_has_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions_has_tags');
    }
}
