@extends('layouts.master')

@section('content')

    <!--================Lost Password Area =================-->

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
						<h3>Reset Password</h3>
                        <form class="row login_form" method="POST" action="{{ route('password.email') }}" id="contactForm" novalidate="novalidate">
                            @csrf
                                <div class="col-md-12 form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="primary-btn">Send Password Reset Link</button>
                                </div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </section>

    <!--================Lost Password Area =================-->

@endsection



