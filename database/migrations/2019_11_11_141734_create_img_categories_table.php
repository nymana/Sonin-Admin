<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_categories', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('newsfeed_id')->nullable();
            $table->foreign('newsfeed_id')->references('id')->on('newsfeeds')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('newspaper_id')->nullable();
            $table->foreign('newspaper_id')->references('id')->on('newspapers')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('banner_id')->nullable();
            $table->foreign('banner_id')->references('id')->on('banners')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('img_categories');
    }
}
