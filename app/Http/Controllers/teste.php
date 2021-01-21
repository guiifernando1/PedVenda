<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teste extends Controller
{
    public function gui()
    {
        return view( view: 'teste.gui');
    }
}
