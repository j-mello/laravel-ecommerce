@extends('layouts.master')

@section('includes')
<script src="https://js.stripe.com/v3/"></script>
@stop

@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="{{ route('checkout.store') }}" method="POST" id='payment-form'>
                            @csrf
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="firstname" name="firstname">
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="lastname" name="lastname">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="phone">
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email">
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="address" name="address">
                                <span class="placeholder" data-placeholder="Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode/ZIP">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <div class="form-group">
                                        <label for="card-element">
                                            Credit or debit card
                                        </label>
                                        <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>

                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                </div>
                            </div>
                            <button class='primary-btn my-3' id='complete-order' type="submit">Proceed to payment</button>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                @foreach (Cart::content() as $product)
                                <li><a href="#">{{ $product->name }} <span class="middle">x {{ $product->qty }}</span> <span class="last">${{ $product->price }}</span></a></li>
                                @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>$ {{Cart::subtotal() }}</span></a></li>

                                @if(session()->has('coupon'))
                                    <li><a href="#">Discount ({{ session()->get('coupon')['name'] }}) <span>-$ {{ session()->get('coupon')['discount'] }}</span></a></li>
                                    <form action="{{ route('coupon.destroy') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class='btn' type="submit">
                                            <i class='fas fa-trash '></i>
                                        </button>
                                    </form>
                                @endif

                                <li><a href="#">Tax <span>$ {{ Cart::tax() }}</span></a></li>
                                <li><a href="#">Total <span>$ {{ session()->has('coupon')
                                    ? Cart::total() - session()->get('coupon')['discount']
                                    : Cart::total()
                                }}</span></a></li>
                            </ul>
                            </div>
                            <div class='coupon my-3'>
                                <div class='code'>
                                    <p>Do you have a code ?</p>
                                <form action="{{ route('coupon.store') }}" method="POST">
                                    @csrf
                                        <div class='d-flex align-items-center contact_form'>
                                            <input type="text" name="coupon" id="coupon" class='form-control' placeholder="Code coupon">
                                            <button class='primary-btn my-3' type="submit">
                                                <i class='fas fa-check'></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
@stop

@section('js')
<script src="{{ asset('js/payment.js')}}">
</script>
@stop
