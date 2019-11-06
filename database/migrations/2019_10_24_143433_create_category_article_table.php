<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_article', function (Blueprint $table) {
            
            $table->unsignedBigInteger('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('article_id')->references('id')->on('articles');
            $table->increments('id');
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
        Schema::dropIfExists('category_article');
    }
}
