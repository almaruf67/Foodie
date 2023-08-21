<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Product::orderBy('id', 'desc')->get();
        $Burgers = Product::orderBy('id', 'desc')->Where('Category','Burger')->get();
        $Desserts = Product::orderBy('id', 'desc')->Where('Category','Dessert')->get();
        $Steaks = Product::orderBy('id', 'desc')->Where('Category','Steak')->get();
        $Coffees = Product::orderBy('id', 'desc')->Where('Category','Coffee')->get();
        $Pizzas = Product::orderBy('id', 'desc')->Where('Category','Pizza')->get();
        // dd($Burger);
        return view('Home.home',compact('items','Burgers','Pizzas','Desserts','Steaks','Coffees'));
    }

    public function contact()
    {
        return view('Home.contact');
    }

    public function about()
    {
        return view('Home.about');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        return view('adminHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome(): View
    {
        return view('managerHome');
    }
}
