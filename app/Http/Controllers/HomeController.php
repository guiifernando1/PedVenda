<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = 'Brow';
        return view('pedvenda.home.index')
        ->with([
            'name_user' => $user, 
        ]);
    }

    public function openPage(Request $request)
    {
        //dd($request->all()); // quando vc quer verificar se o que venho por ajax venho mesmo
        $products = array(
            'potatos',
            'apple',
            'banana'
        );
        return view('pedvenda.home.register')
        ->with([
            'products' => $products, 
        ]);
    }

    public function registerProduct(Request $request)
    {
        dd($request->all());
    }

}
