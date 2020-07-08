<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use App\OrderProduct;

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
                    //'product'=> Cart::content()->toJson()
                ]
            ]);
            //dd($charge);

            // Création de la commande avant la redirection

            $order = Order::create([
                'user_id' => auth()->user()->id,
                'payment_firstname' => $request->firstname,
                'payment_lastname' => $request->lastname,
                'payment_phone' => $request->phone,
                'payment_email' => $request->email,
                'payment_address' => $request->address,
                'payment_city' => $request->city,
                'payment_postcode' => $request->postcode,
                'discount' => session()->get('coupon')['name'] ?? null,
                'payment_total' => session()->has('coupon') ? round(Cart::total() - session()->get('coupon')['discount'], 2) : Cart::total(),

            ]);

            foreach(Cart::content() as $product)
            {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $product->qty
                ]);
            }

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

        $order = Order::latest()->first();
        Cart::destroy();
        session()->forget('coupon');
        return view('success', [
            "order" => $order,
        ]);
    }
}
