<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function submenu(){
    	return $this->belongsTo('App\submenu','product_id','id');
    }
}
