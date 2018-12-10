@extends('layouts.master')

@section('title', 'Login')


@section('content')

<section id="login_bg">
<div  class="container">
<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<div id="login">
			<p class="text-center">
            <img src="{{ asset('img/icon/logo.png') }}" alt="Login Logo" class="login__image">
			</p>
			<hr>
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="row">
            <div class="col-md-6 col-sm-6 login_social">
				<a href="#" class="btn btn-primary btn-block"><i class="icon-facebook"></i> Facebook</a>
			</div>
			<div class="col-md-6 col-sm-6 login_social">
				<a href="#" class="btn btn-info btn-block "><i class="icon-twitter"></i>Twitter</a>
			</div>
			</div> <!-- end row -->
			<div class="login-or"><hr class="hr-or"><span class="span-or">or</span></div>
				<div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="{{__('Email Address')}}">
                    <span class="input-icon"><i class=" icon-user"></i></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
				</div>
				<div class="form-group" style="margin-bottom:5px;">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder={{ __('Password') }} style="margin-bottom:5px;">
                    <span class="input-icon"><i class="icon-lock"></i></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group" style="margin-bottom:5px;">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
				<div class="form-group" style="margin-bottom:5px;">
                    <div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
			</form>
		</div>
	</div>
</div>
</div>
</section> <!-- End login -->
@endsection

