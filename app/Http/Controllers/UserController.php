<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
  public function create()
   {
       return view('welcome.blade');
   }

   public function store(ProductRequest $request)
    {
        $product = new Product;
        $product->name        = $request->name;
        $product->description = $request->description;
        $product->quantity    = $request->quantity;
        $product->price       = $request->price;
        $product->save();
        return redirect()->route('products.index')->with('message', 'Product created successfully!');
    }
}
