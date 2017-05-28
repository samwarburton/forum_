<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Board;
use App\User;

class Thread extends Model
{
    public function board(){
    	return $this->belongsTo('App\Board');
    }



    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }



}
