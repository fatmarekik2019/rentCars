<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Car;
use App\Photo;
use App\Category;

class AdminController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
}
