<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable = ['name'];
    
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
     public function articles()
    {
        return $this->belongsToMany('App\Article','category_article','category_id','article_id');
    }
}
