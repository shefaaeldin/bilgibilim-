<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftdeletesToModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->softDeletes();
            
        });
        
         Schema::table('articles', function (Blueprint $table) {
            
            $table->softDeletes();
            
        });
        
        
        
         Schema::table('categories', function (Blueprint $table) {
            
            $table->softDeletes();
            
        });
        
         Schema::table('tags', function (Blueprint $table) {
            
            $table->softDeletes();
            
        });
        
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('models', function (Blueprint $table) {
            //
        });
    }
}
