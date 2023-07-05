<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::latest()->paginate(3);
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=Product::all();
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ]);
        $input=$request->all();
        if($image=$request->file('image')){
            $destination = 'images/';
            $newName = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination,$newName);
            $input['image']= $newName;
        }
        Product::create($input);
        return redirect()->route('products.index')
            ->with('success','Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required',
        ]);
        $input=$request->all();
        if($image=$request->file('image')){
            $destination = 'images/';
            $newName = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination,$newName);
            $input['image']= $newName;
        }else{
            unset($input['image']);
        }
        $product->update($input);
        return redirect()->route('products.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }
}
