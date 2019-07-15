<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
	protected $guarded=[];

	public function customers()
	{
		return $this->hasOne('App\Customer', 'id', 'customer_id');
	}
	public function cars()
	{
		return $this->hasOne('App\Car', 'id', 'car_id');
	}
	
}