<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
	protected $guarded=[];

	
	public function cars()
	{
		return $this->hasOne('App\Car', 'id', 'car_id');
	}
}