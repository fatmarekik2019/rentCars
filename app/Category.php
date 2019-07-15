<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
	protected $guarded=[];

	public function cars()
	{
		return $this->hasMany('App\Car', 'category_id', 'id');
	}
	
}