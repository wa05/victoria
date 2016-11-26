<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'images';

    protected $fillable = array('description','image', 'album_id');

    public function album()
    {
    	return $this->belongsTo('App\Album');
    }
}
