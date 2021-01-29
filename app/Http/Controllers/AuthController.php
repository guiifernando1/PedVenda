<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function dashboard()
    {
        if(Auth::check() === true) {
          return view('admin.dashboard');
        }  
        return redirect::route('admin.login');
      }

    public function ShowLoginForm()
    {
      return view('admin.formlogin');
    }

}


