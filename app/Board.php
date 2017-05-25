<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Thread;






class Board extends Model
{
    public function threads(){
    	return $this->hasMany('App\Thread');
    }







}
