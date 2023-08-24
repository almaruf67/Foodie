<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FoodController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id', 'asc')->paginate(10);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //For Image

        $file = $request->poster;
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . rand(1, 999999) . '.' . $extension;
            $file->move('images/post', $fileName);
            $path = '/images/post/' . $fileName;
        } else {
            $path = null;
        }

        $product = new Product();

        $product->Category = $request->category;
        $product->Title = $request->title;
        $product->Poster = $path;
        $product->Description = $request->description;
        $product->Price = $request->price;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($data)
    {
        $product = Product::where('id',$data)->first();

        // dd($product);
        return view('product.details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $file = $request->poster;
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . rand(1, 999999) . '.' . $extension;
            $file->move('images/post', $fileName);
            $product->Poster = '/images/post/' . $fileName;
        }

        $product->Category = $request->category;
        $product->Title = $request->title;

        $product->Description = $request->description;
        $product->Price = $request->price;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back();
    }
}
