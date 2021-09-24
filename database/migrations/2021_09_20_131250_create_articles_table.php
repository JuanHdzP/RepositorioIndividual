<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id','10');
            $table->string('title','30');
            $table->string('img','150');
            $table->string('subtitle','150');
            $table->text('body','100');
            //Declaracion de llaves foraneas
            $table->unsignedInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category');
            $table->unsignedInteger('img_id')->unsigned();
            $table->foreign('img_id')->references('id')->on('images');

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
        Schema::dropIfExists('articles');
    }
}
