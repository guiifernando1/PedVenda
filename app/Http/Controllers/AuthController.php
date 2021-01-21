<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard()
    {
        //if (Auth::check())
        return view( view: 'admin.dashboard');
    }

    public function store(Request $request){

        Auth::return([
            'nome' => $request->nome,
            'sexo' => $request->custo,
        ]);

        return "vc conseguiu";

    }
}

