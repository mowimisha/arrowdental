<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submitContact extends Model
{
    public function __construct($data)
    {
        $this->data = $data;
    }
}
