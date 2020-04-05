<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    Public function creator() {
        return $this->belongsTo('App\User', 'created_by','id');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    Public function category() {
        return $this->belongsTo('App\Category');
    }
}
