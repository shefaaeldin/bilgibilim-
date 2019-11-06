<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    
    protected $fillable = [
        'name', 'email', 'password','first_name','last_name','phone',
    ];
    
     public function articles()
    {
        return $this->hasMany('App\Article','writer_id','id');
    }
}
