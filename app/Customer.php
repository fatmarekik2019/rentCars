<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
	protected $guarded=[];

	public function bookings()
	{
		return $this->hasMany('App\Booking', 'customer_id', 'id');
	}
	
}