<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class CarController extends Controller
{
    public function handleShowCars()
    {
    	$cars = Car::all();
    	return view('listing', [
    	'cars' => $cars
    		]);
    }
    
}
