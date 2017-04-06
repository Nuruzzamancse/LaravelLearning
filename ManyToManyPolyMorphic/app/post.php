<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
    	return $this->morphToMany('App\tag','taggable');
    }
}
