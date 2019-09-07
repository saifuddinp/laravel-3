<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
    public function menu(){
    	return $this->belongsTo('App\submenu','menu_id','id');
    }
}
