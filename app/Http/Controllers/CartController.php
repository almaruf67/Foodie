<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class CartController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('Product.cart');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }
    public function checkout()
    {
        // dd($total);
       return View("Product.checkout");
    }

    
    
    public function addtoCart($id)
    {
        $prod = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        $total=0;
        if(session('total'))
        {
            $total=session()->get('total');
        }
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $total+=$cart[$id]['price'];
        }
        else {
            $cart[$id] = [
                "title" => $prod->Title,
                "quantity" => 1,
                "price" => $prod->Price,
                "poster" => $prod->Poster,
                "description" => $prod->Description,
            ];
            $total+=$cart[$id]['price'];
        }
        session()->put('cart', $cart);
        // dd($cart);
        session()->put('total', $total);
        return redirect()->back()->with('success', 'Product has been added to cart!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $items = new Cart();
        $items->productId = $request->pid;
        $items->quantity = $request->quantity;
        $items->customerId = session()->get('id');
        $items->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request)
    {
        $total = $request->session()->pull('total');

        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $total-=$cart[$request->id]['quantity']*$cart[$request->id]['price'];
            $cart[$request->id]["quantity"] = $request->quantity;
            $total+=$cart[$request->id]['quantity']*$cart[$request->id]['price'];
            session()->put('cart', $cart);
            session()->put('total', $total);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
   
    public function deleteProduct(Request $request)
    {
        $total = $request->session()->pull('total');
        
        if($request->id) {
            $cart = session()->get('cart');
            $total-=$cart[$request->id]['quantity']*$cart[$request->id]['price'];
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->put('total', $total);
            session()->flash('success', 'Product successfully deleted.');
        }
    }

    public function destroy(string $id)
    {
        //
    }
}
