<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Gerer le paiement
    public function checkout()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = \Stripe\Charge::create([
                "amount" => session()->has('coupon') ? round(Cart::total() - session()->get('coupon')['discount'], 2) *100 : Cart::total()*100,
                "currency" => 'eur',
                "description" => 'Mon paiement test',
                "source" => $request->stripeToken,
                "receipt_email" => $request->email,
                "metadata" => [
                    'owner' => $request->name,
                    'product'=> Cart::content()->toJson()
                ]
            ]);
            //dd($charge);
            return redirect()->route('checkout.success')->with('success','Payment succeeded');
        }
        catch(\Stripe\Exception\CardException $e) {
            throw $e;
        }
    }

    // Si le paiement est reussi
    public function success()
    {
        if(!session()->has('success'))
        {
            redirect()->route('home');
        }
        Cart::destroy();
        session()->forget('coupon');
        return view('success');
    }
}
