<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model
{
    // protected $fillable = array('title', 'body');

    //posts table in database
    protected $guarded = [];
    // public function comments()
    // {
    //     return $this->hasMany('App\Comment','on_post');
    // }
    
    public function author()
    {
        return $this->belongsTo('App\User','author_id');
    }
}
