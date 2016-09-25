<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Catogry extends Model
{
	use softDeletes;
	protected $table='catogry';
	
	public function prodects(){
	return $this->hasMany('App\Prodect');
}  
    //
}
