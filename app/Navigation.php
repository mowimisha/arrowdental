<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    //
    public function page()
    {
       return $this->belongsToMany('Page');
    }
}
