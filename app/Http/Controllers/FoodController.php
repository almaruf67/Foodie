<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Product.product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $file = $request->poster;
        if ($file) {
            $extention = $file->getClientOriginalExtension();
            $fileName = time() . rand(1, 999999) . '.' . $extention;
            $file->move('images/post', $fileName);
            $path = '/images/post/' . $fileName;
        } else {
            $path = null;
        }


        $prod = new Product();
        $prod->Category = $request->category;
        $prod->Title = $request->title;
        $prod->Poster = $path;
        $prod->Description = $request->description;
        $prod->Price = $request->price;
        $prod->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show($data)
    {
        $product = Product::where('id',$data)->first();
        
        // dd($product);
        return view('Product.details', compact('product'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
