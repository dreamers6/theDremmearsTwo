@extends('layout')
<div class="reg">
<div class="container text-center register">
<nav class="navbar navbar-expand-md">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link color" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link color" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
</nav>
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
        <div class="col-xl-6 col-md-12 right">
            <div class="logo"><img src="logo.png" alt="logo"></div>
            <h1>Sing up for</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="username text-left">
                    <label for="username">{{ __('Username') }}</label>

                    <div class="col">
                        <i class="fa-regular fa-user"></i>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="flex">
                    <div class="firstName text-left">
                        <label for="firstName">{{ __('First name') }}</label>

                        <div class="col">
                            <i class="fa-solid fa-user"></i>
                            <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

                            @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="lastName text-left">
                        <label for="lastName">{{ __('Last name') }}</label>

                        <div class="col">
                            <i class="fa-solid fa-user"></i>
                            <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                            @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="email text-left">
                            <label for="email">{{ __('Email') }}</label>

                            <div class="col">
                                <i class="fa-regular fa-envelope"></i>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="password text-left">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            <div class="col">
                                <i class="fa-solid fa-lock"></i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="register">
                            <div class="col">
                                <button type="submit" class="btn">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>
                        </div>

            </form>
        </div>
    </div>
</div>
</div>
