@extends('layouts.app')

@section('content')
<div class="container-fluid home">
                <div class="row">
                    <div class="col-3 sidebar">
                        <div class="logo">
                            <img src="{{ asset('logo.png') }}" alt="logo">
                        </div>
                        <ul>
                            <li><a href="#"  class="activee"><i class="fa-solid fa-notes-medical"></i></i>New Order</a></li>
                            <li><a href="#"><i class="fa-solid fa-database"></i>Services</a></li>
                            <li><a href="#"><i class="fa-solid fa-border-all"></i>Orders</a></li>
                            <li><a href="#"><i class="fa-solid fa-sack-dollar"></i>Add Funds</a></li>
                            <li><a href="#"><i class="fa-solid fa-sack-dollar"></i>Transfer Funds</a></li>
                            <li><a href="#"><i class="fa-solid fa-scroll"></i>Terms of services</a></li>
                            <li><a href="#"><i class="fa-solid fa-database"></i>Services</a></li>
                            <li><a href="#"><i class="fa-solid fa-notes-medical"></i></i>New Order</a></li>
                            <li><a href="#"><i class="fa-solid fa-scroll"></i>Terms of services</a></li>
                        </ul>
                    </div>
                <div class="col-9 home-content">
                    <div class="welcome">
                        <h2>Social Media Marketing PanelWelcome to our website</h2>
                        <p>We are here to give you the best service.</p>
                    </div>
                    <ul>
                    <a href="{{ route('logout') }}">
                                        <i class="fa-solid fa-dollar-sign"></i>
                                    </a>
                                    <a href="{{ route('logout') }}">
                                        <i class="fa-solid fa-language"></i>
                                    </a>
                                    <a href="{{ route('logout') }}">
                                        <i class="fa-solid fa-circle-user"></i>
                                    </a>
                                    <a href="{{ route('logout') }}">
                                        <i class="fa-regular fa-bell"></i>
                                    </a>
                                    <!-- <div class="dropdown-menu-end" aria-labelledby="navbarDropdown"> -->
                                    <a class="dropdown-item logout" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-power-off"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                <!-- </div> -->
                            </li>
                    </ul>
                </div>
                </div>
                </div>
            </div>
<!-- <div class="container"> -->
    <!-- <div class="row justify-content-center"> -->
        <!-- <div class="col-md-8"> -->
            <!-- <div class="card"> -->
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <!-- <div class="card-body"> -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
