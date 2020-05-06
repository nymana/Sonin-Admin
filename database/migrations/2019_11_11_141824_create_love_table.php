<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('love', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('loves');

            $table->unsignedBigInteger('newspaper_loves')->nullable();
            $table->foreign('newspaper_loves')->references('id')->on('newspapers')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('newsfeed_loves')->nullable();
            $table->foreign('newsfeed_loves')->references('id')->on('newsfeeds')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('user_loves')->nullable();
            $table->foreign('user_loves')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('love');
    }
}
