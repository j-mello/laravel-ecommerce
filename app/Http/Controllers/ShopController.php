<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->category){
            $category = Category::where('slug', request()->category)->firstOrFail();
            $products = Product::where('category_id', $category->id)->get();
        }
        else {
            $products = Product::all();
        }

        $categories = Category::all();
        return view('shop', [
            "products" => $products,
            "categories" => $categories,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product',[
            'product' => $product,
        ]);
    }
}
