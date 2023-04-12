@extends('layouts.app')

@section('content')
<div class="container text-center register log">
    <div class="row mt-5">
        <div class="col-xl-6 col-md-12 right">
            <div class="logo"><img src="logo.png" alt="logo"></div>
            <h1>Login in</h1>
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <div class="email text-left">
                    <label for="email">{{ __('Email') }}</label>

                    <div class="col">
                        <i class="fa-regular fa-envelope"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="password text-left">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="col">
                        <i class="fa-solid fa-lock"></i>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="text-left">
                    <div class="col top">
                        <!-- <div class="form-check"> -->
                            <div class="left">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        <!-- </div> -->
                        @if (Route::has('password.request'))
                            <a class="btn-link forget" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <div class="register">
                    <div class="col">
                        <button type="submit" class="btn">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="register-left login">
                <div class="in">
                    <div class="img"><img src="left_signup.png" alt="registerLeft"></div>
                    <div class="details">
                        <h1>Earn As You Spend!</h1>
                        <p>Load balance, spend. Enjoy our social media services as you spend.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="container text-center register">
    <div class="row mt-5">
        <div class="col-xl-6 col-md-12">
            <div class="register-left">
                <div class="in">
                    <div class="img"><img src="left_signup.png" alt="registerLeft"></div>
                    <div class="details">
                        <h1>Earn As You Spend!</h1>
                        <p>Load balance, spend. Enjoy our social media services as you spend.</p>
                    </div>
                </div>
            </div>
        </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
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
</div> -->
@endsection
