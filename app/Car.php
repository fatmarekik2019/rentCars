<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
	protected $guarded=[];

	public function photos()
	{
		return $this->hasMany('App\Photo', 'car_id', 'id');
	}
	public function categories()
	{
		return $this->hasOne('App\Category', 'id', 'category_id');
	}
	public function bookings()
	{
		return $this->hasMany('App\Booking');
	}
}