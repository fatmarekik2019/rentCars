<?php

Route::group(['module' => 'Categ111', 'middleware' => ['web'], 'namespace' => 'App\Modules\Categ111\Controllers'], function() {

    Route::resource('categ111', 'Categ111Controller');

});
