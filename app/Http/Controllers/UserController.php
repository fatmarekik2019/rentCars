<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

use App\Category;
use App\Car;
use App\Photo;
use App\Booking;
use File;

class UserController extends Controller
{
    public function Show()
    {
    	$categories = Category::all();
    	$cars = Car::all();
        $cl = Booking::all();
        $val = Booking::where('validation', '=', 0)->get();
        //dd($val);
        return view('user', [
        'categories' => $categories,
        'cars' => $cars,
        'val' => $val
            ]);	

    }
    public function handleAddCategory()
    {
    	$data = Input::all();
    	Category::create(['marque'=>$data['marque']]);
    	return redirect('user');
    }

    public function handleAddCar()
    {
    	$data = Input::all();
    	Car::create(['model'=>$data['model'], 'matricule'=>$data['matricule'], 'couleur'=>$data['couleur'], 'prix'=>$data['prix'], 'puissance'=>$data['puissance'], 'carburant'=>$data['carburant'], 'nombre_places'=>$data['nombre_places'], 'category_id'=>$data['category_id']]);
    	return redirect('user');
    }
    
    public function handleAddPhotos()
    {
    	$data = Input::all();
    	if($data['photo'])
         {
        
        foreach ($data['photo'] as $file) 
        {
               $photo = 'photo-' . str_random(5) . time() . '.' . $file->getClientOriginalExtension();
           $fullImagePath = public_path('storage/' . $photo);
           Image::make($file->getRealPath())->resize(500, 230)->save($fullImagePath);
           $photoPath = 'storage/' . $photo;
        Photo::create(['lin$booking_idk'=>$photoPath, 'car_id'=>$data['car_id']]);
          
            }

        }
        return back();

    }
    public function Validation($booking_id)
    {
       $cl = Booking::find($booking_id);
       $cl->validation = 1;
       $cl->save();
       return back();
    }

    
}
