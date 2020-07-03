@extends('layouts.master')

@section('content')

<!--================Reset Password Area =================-->

<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="{{ asset('img/login.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    @if(session('status'))
                        <div class='alert alert-success'>
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Reset Password</h3>
                    <form class="row login_form" method="POST" action="{{ route('password.request') }}" id="contactForm" novalidate="novalidate">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="col-md-12 form-group">

                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">

                            @error('password')

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="col-md-12 form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation">
                        </div>

                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Reset Password</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

<!--================Reset Password Area =================-->
@endsection


