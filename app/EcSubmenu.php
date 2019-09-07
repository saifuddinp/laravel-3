<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EcSubmenu extends Model
{
   public function menu(){
    	return $this->belongsTo('App\menu', 'menu_id', 'id');
    }
}
