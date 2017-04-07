<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function getTitleyAttribute($value)
    {
    	return ucfirst($value);
    }

    public function setBodyAttribute($value)
    {
    	return $this->attributes['body'] = ucfirst($value);
    }
}
