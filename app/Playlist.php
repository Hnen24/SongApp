<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public function songs()
    {
        return $this->belongsToMany('App\Song');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
