<?php

namespace App\Http\Controllers;

use App\OrderProduct;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{

    public function home()
    {
        // New product
        $news = Product::take(2)->get();

        // Last product
        $latestProducts = Product::orderby('id', 'DESC')->take(8)->get();

        return view('home',[
            'latestProducts' => $latestProducts,
            'news' => $news,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function orders()
    {
        $user = auth()->user();
        return view('orders', [
            'orders' => $user->orders
        ]);
    }
}
