<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function notices()
    {
    	return $this->belongsToMany('App\Notice');
    }
}
