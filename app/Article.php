<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    
    
     protected $fillable = ['title', 'content','writer_id'];
    
     
         public function writer()
    {
        return $this->belongsTo('App\Admin','writer_id','id');
    }
    
     public function categories()
    {
        return $this->belongsToMany('App\Category','category_article','article_id','category_id');
    }
    
     public function tags()
    {
        return $this->belongsToMany('App\Category','tag_article','article_id','tag_id');
    }
}
