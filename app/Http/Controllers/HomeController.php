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
        $Burgers = Product::orderBy('id', 'desc')->Where('Category','Burger')->take(4)->get();
        $Desserts = Product::orderBy('id', 'desc')->Where('Category','Dessert')->take(4)->get();
        $Steaks = Product::orderBy('id', 'desc')->Where('Category','Steak')->take(4)->get();
        $Coffees = Product::orderBy('id', 'desc')->Where('Category','Coffee')->take(4)->get();
        $Pizzas = Product::orderBy('id', 'desc')->Where('Category','Pizza')->take(4)->get();
        // dd(session()->get('cart'));
        return view('Home.home',compact('items','Burgers','Pizzas','Desserts','Steaks','Coffees'));
    }

    public function contact()
    {
        return view('Home.contact');
    }
    public function menu()
    {
        return view('Home.menu');
    }

    public function about()
    {
        return view('Home.about');
    }
    public function shop()
    {
        $items = Product::orderBy('id', 'desc')->paginate(3);

        // dd( $items->toarray());
        return view('Home.shop',compact('items'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
//        return view('adminHome');
        return view('admin-template.admin-dashboard');
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
