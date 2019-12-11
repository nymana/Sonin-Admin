<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewspapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspapers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable;
//            $table->string('filePath')->nullable();
            $table->string('file')->nullable();
            $table->string('image')->nullable();
            $table->longText('description');
            $table->integer('commentCounts');
            $table->integer('downloadCounts');
            $table->integer('viewCounts');
            $table->tinyInteger('isApprove');
            $table->json('json')->nullable();
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
        Schema::dropIfExists('newspapers');
    }
}
