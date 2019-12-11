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
            $table->mediumText('c_Body');
            $table->unsignedBigInteger('newspaperCommentId')->nullable();
            $table->foreign('newspaperCommentId')->references('id')->on('newspapers')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('newsfeedCommentId')->nullable();
            $table->foreign('newsfeedCommentId')->references('id')->on('newsfeeds')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('userCommentId')->nullable();
            $table->foreign('userCommentId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->json('json')->nullable();;
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
        Schema::dropIfExists('comments');
    }
}
