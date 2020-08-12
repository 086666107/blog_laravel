<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_db extends Model
{
	public function attributes(){
		return $this->hasMany('App\attiribute','product_id');
	}
}
