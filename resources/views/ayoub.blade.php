@extends('layout')
@section("ayoub")

<nav class="navbar navbar-expand-lg bg-body-tertiary mt-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <!-- <i class="fa-sharp fa-light fa-bars"></i> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Sign in</a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link sign">Sign Up</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<header>
    <div class="container px-4 text-center">
        <div class="row gx-5">
            <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="p-3">
                <h1 data-aos="fade-down-right" data-aos-duration="1000"><span>Most Stable </span>Social Media Services</h1>
                <p>We only have the fastest and best quality services and we provide service with the most affordable price policy.</p>
                <div class="content">
                    <img class="crown" src="crown.svg" alt="crown">
                    <p>6391 + Happy Customer</p>
                    <a href="#" class="nav-link sign2">Sign Up</a>
                </div>
                <div class="works">
                    <a href="#"><i class="fa-solid fa-circle-nodes"></i><p class="how"></span>See How it Works<i class="fa-solid fa-arrow-right"></i></p></a>
                </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="p-3 img">
                <img src="main-img.png" class="main-img" alt="main">
                <img src="insta.svg" class="insta-img" alt="insta">
            </div>
            </div>
        </div>
    </div>
</header>

@endsection
