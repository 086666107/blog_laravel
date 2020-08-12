<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function banners(){
    	return $this->hasmany('App\Banner','name');
    }
}
