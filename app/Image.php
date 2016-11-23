<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = array('description','image');

    public function album()
    {
    	return $this->belongsTo('App\Album');
    }
}
