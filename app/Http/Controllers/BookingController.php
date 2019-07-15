<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

use App\Category;
use App\Car;
use App\Photo;
use App\Booking;
use App\Customer;
use File;
use Carbon;

class BookingController extends Controller
{
	public function ShowBooking()
    {
    	$categories = Category::all();

    	return view('reservation1', [
    	'categories' => $categories
    		]);
    }

   public function Search()
   {
   	$data = Input::all();
    $dateDepart = Carbon\Carbon::createFromFormat('d.m.Y', $data['date_depart'])->format('Y-m-d');
    
    $dateRetour = Carbon\Carbon::createFromFormat('d.m.Y', $data['date_retour'])->format('Y-m-d');
    $marque =  $data['category_id'];
    $prix = $data['prix'];
    //dd($marque); 
        
           $cars =Car::whereHas('bookings', function($query) use ($dateDepart, $dateRetour, $marque, $prix)
           {

           		//$query->where('date_depart','>',$dateRetour)->where('date_depart','>',$dateDepart);
           		//$query->where('date_retour','<',$dateDepart)->where('date_retour','<',$dateRetour);
               $query->whereNotBetween('date_depart',[$dateDepart,$dateRetour]);
               $query->whereNotBetween('date_retour',[$dateDepart,$dateRetour]);
               $query->where('category_id', '=', $marque);
               $query->where('prix', '=', $prix);

           }
           )->orwhereDoesntHave('bookings')->where('category_id', 'like', $marque)->where('prix', 'like', $prix)->get();
            //dd($car->pluck('id'));


           return view('reservation2', [
   				'dateDepart' => $dateDepart,
   				'dateRetour' => $dateRetour,
   				'cars' => $cars
   			]);
   }
   public function handleVerificationBooking($car_id, $dateDepart, $dateRetour)
   {
   	$cars = Car::whereId($car_id)->get();
   	//dd($cars);
   	return view('reservation3', [
   				'dateDepart' => $dateDepart,
   				'dateRetour' => $dateRetour,
   				'car_id' => $car_id,
   				'cars' => $cars
   			]);
   	}
   	public function handleConfirmationBooking($car_id, $dateDepart, $dateRetour)
   {
   	$cars = Car::whereId($car_id)->get();
   	//$dd = strtotime($dateDepart);
   	//$dr = strtotime($dateRetour);
   	//dd($dr);
   	return view('reservation4', [
   				'dateDepart' => $dateDepart,
   				'dateRetour' => $dateRetour,
   				'car_id' => $car_id,
   				'cars' => $cars
   			]);
   	}

   	public function handleAddBooking()
    {
    	$data = Input::all();
    	$cl = Customer::create(['Firstname'=>$data['Firstname'], 'Lastname'=>$data['Lastname'], 'email'=>$data['email'], 'telephone'=>$data['telephone'], 'cin'=>$data['cin'], 'numero_permis'=>$data['numero_permis']]);
    	Booking::create(['customer_id'=>$cl->id, 'car_id'=>$data['car_id'], 'validation'=>0, 'age'=>$data['age'], 'date_depart'=>$data['date_depart'], 'date_retour'=>$data['date_retour']]);
    	//dd($cl->id);
    	Session::flash('message', "Votre réservation est enregistrée");
    	return back();
    }
   
}
