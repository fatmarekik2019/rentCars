<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/user/category', 'UserController@handleAddCategory')->name('handleAddCategory');
Route::post('/user/car', 'UserController@handleAddCar')->name('handleAddCar');
Route::post('/user/photo', 'UserController@handleAddPhotos')->name('handleAddPhotos');
Route::get('/user', 'UserController@Show')->name('Show');
Route::get('/user1/{booking_id}', 'UserController@Validation')->name('Validation');

Route::get('/lising', 'CarController@handleShowCars')->name('ShowCars');
Route::get('/reservation1', 'BookingController@ShowBooking')->name('reservation1');
Route::get('/reservation', 'BookingController@ShowCategories')->name('ShowCategories');

Route::post('/reservation2', 'BookingController@Search')->name('reservation2');

Route::get('/reservation3/{car_id}/{dateDepart}/{dateRetour}', 'BookingController@handleVerificationBooking')->name('handleVerificationBooking');

Route::get('/reservation4/{car_id}/{dateDepart}/{dateRetour}', 'BookingController@handleConfirmationBooking')->name('handleConfirmationBooking');

Route::post('/reservation4', 'BookingController@handleAddBooking')->name('handleAddBooking');