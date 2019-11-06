<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
     public function articles()
    {
        return $this->belongsToMany('App\Article','category_article','category_id','article_id');
    }
}
