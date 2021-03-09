<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $limit=10;
        $products=Product::paginate($limit);
        return  view('backend.product.index',compact('products'));
    }

    public function list()
    {
        //
        $limit=10;
        $products=Product::latest()->paginate($limit);
        return  view('backend.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::get();
        return view('backend.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated=$request->validate([
            'name'=>'required|unique:products|min:5',
            'category_id'=>'required',
            'slug'=>'required|unique:products',
            'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'selling_price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'description'=>'required',

        ]);
          $validated['user_id']=Auth::id();
            $products=Product::create($validated);

return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories=Category::get();
        return  view('backend.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validate=$request->validate([
            'name'=>'required|min:6',
            'category_id'=>'required',
            'slug'=>'required',
          'price' => 'required|regex:/^(\d+(,\d{1,2})?)?$/',
          'selling_price' => 'required|regex:/^(\d+(,\d{1,2})?)?$/',
            'description'=>'required',

        ]);

       $product->name=$request->name;
       $product->category_id=$request->category_id;
       $product->slug=$request->slug;
       $product->price=$request->price;
       $product->selling_price=$request->selling_price;
       $product->description=$request->description;
       $product['user_id']=Auth::id();

       $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
      $product->delete();
       return  redirect()->route('product.index');
    }
}
