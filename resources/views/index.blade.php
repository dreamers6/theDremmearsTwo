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

@section("anass")
   {{-- Anass's Home page Sections --}}
   <div class="anass-part">
   {{-- first-section --}}
    <div class="brands-section">
        <div class="container brands-container">
            <div class="row brands-row d-flex justify-content-between">
               <div class="col-6 col-md-auto col-sm-6 "> <img src='{{asset('ytb.svg')}}' class="brand-logo" alt="youtube-logo"> </div>
               <div class="col-6 col-md-auto col-sm-6"> <img src='{{asset('ch.svg')}}' class="brand-logo" alt="clubhouse-logo"> </div>
               <div class="col-6 col-md-auto col-sm-6"> <img src='{{asset('sp.svg')}}' class="brand-logo" alt="youtube-logo"> </div>
               <div class="col-6 col-md-auto col-sm-6"> <img src='{{asset('ig.svg')}}' class="brand-logo" alt="youtube-logo"> </div>
               <div class="col-6 col-md-auto col-sm-6"> <img src='{{asset('tw.svg')}}' class="brand-logo" alt="youtube-logo"> </div>
            </div>
        </div>
    </div>
    {{-- end of the first section --}}
    {{-- second-section --}}
    <div class="why-us-section">
        <div class="container">
            <div class="row why-us-row">
                <h2 class="why-us-title text-center">Why U.S?</h2>
                <div class="boxes" >
                    <div class="row">
                        <div class="col-lg-3 col-12 mb-3">
                    <div class="box">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="headset-icon icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                              </svg></div>
                            <div class="icon-2"></div>
                        </div>
                        <h1>Fast and Reliable Support</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-12 mb-3">
                    <div class="box">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bolt icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning" viewBox="0 0 16 16">
                                <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z"/>
                              </svg></div>
                            <div class="icon-2"></div>
                        </div>
                        <h1>Instant Complete Services</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-12 mb-3">
                    <div class="box">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="usd icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                              </svg></div>
                            <div class="icon-2"></div>
                        </div>
                        <h1>Cheap and Affordable Services</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-12 mb-3">
                    <div class="box">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="credit-card icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                              </svg></div>
                            <div class="icon-2"></div>
                        </div>
                        <h1>10+ Different Payment Methods</h1>
                    </div>
                </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- end of the second section --}}
    {{-- third-section --}}
    <div class="third-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" >
                     <img src="{{asset("m-cards.png")}}" class="m-cards-png" data-aos="fade-right" data-aos-duration="1500" alt="first-col image">
                </div>
                <div class="col-lg-5">
                    <h2 class="third-section-title mb-5">Get higher every time you spend and earn as you get higher!</h2>
                    <div class="hr-line"></div>
                    <p class="third-section-text">With 3D Secure payment methods, you can create your order whenever you want by loading the balance 24/7 without any problems. All balances you upload are automatically uploaded to your account. </p>
                    <div class="buttons">
                     <div class="row buttons-row align-items-center">
                        <div class="col-md-auto col-12 mb-10 first-btn-col"><a href="" class="btn btn-block">View Services</a></div>
                        <div class="col-md-auto col-12 second-btn-col"><a href="" class="btn sign-up-btn">Sign Up</a> </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of the third-section --}}
    </div>
    {{-- end of my sections --}}
@endsection



@section('hamid')

<div class="section-one hs_mid pt-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="title mb-5">User-Friendly, Fast and Dynamic Panel</h2>
                <div class='line'></div>
                <p class="text">We are always with you for all your questions and problems. Our priority is our customer satisfaction. We always protect your customer privacy with KVKK data.</p>
                <div class="btn-container mt-5">
                    <div class="row">
                        <div class="col-md-auto col-12 mb-4 mb-lg-0">
                            <a href="#" class="btn btn-block pl-0">View Services
                            </a>
                        </div>
                        <div class="col-md-auto col-12" >
                            <a href="#" class="btn btn-danger btn-border btn-block">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 d-none d-md-block pic_left" data-aos="fade-down" data-aos-duration="2000">
                <img src="{{ asset('/m-cards-2.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="section-tow hs_mid pt-5 mb-5">
    <div class="container">
        <div class="box mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                    <h2 class="title">Enjoy the Privileges...</h2>
                    <p class="text">As Lider Smm Panel Social Media Dealership Panel, you have no doubt that we will always offer you the most appropriate and highest quality services.</p>
                    <div class="btns-container mt-5">
                        <div class="row">
                            <div class="col-md-auto col-12 mb-4 mb-lg-0">
                                <a href="#" class="btn btn-border btn-danger pl-0">View Services
                                </a>
                            </div>
                            <div class="col-md-auto col-12">
                                <a href="#" class="btn btn-block">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="phone d-none d-xl-block">
                <img src={{ asset('/m-phone.png') }} alt="" data-aos="fade-up" data-aos-duration="1000">
            </div>
        </div>
    </div>
</div>

<footer class="hs-mid mt-5">
    <div class="footer-top pt-3">
        <div class="container">
            <div class="row align-items-center pb-3">
                <div class="col-md-auto text-center text-md-start mb-4 mb-md-0">
                    <a href="#">
                        <img src={{ asset('/logo.png') }} height="60" alt="logo">
                    </a>
                </div>
                <div class="col-md mt-4 mt-md-0 text-lg-end text-md-end text-center">
                    <ul class="links">
                        <li>
                            <a href="#">Home page</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Api</a>
                        </li>
                        <li>
                            <a href="#">Blogs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-5">
        <div class="container">
            <div class="row ">
                <div class="content-title py-4 mb-5">
                    <h2 class="text-center mt-4">To rise from today on Social Media <br>
                        are you ready to start?</h2>
                </div>
                <div class="btns d-flex justify-content-center pb-4 mb-5">
                    <div class="row">
                        <div class="col-md-auto col-12 mb-4 mb-lg-0">
                            <a href="#" class="btn btn-block " data-aos="fade-right" data-aos-duration="1000">View Services
                            </a>
                        </div>
                        <div class="col-md-auto col-12">
                            <a href={{ url('Register') }} class="btn btn-danger" data-aos="fade-left" data-aos-duration="1000">Register
                            </a>
                        </div>
                    </div>
                </div>
                <div class="copyrite">
                    <p>
                        © Copyright 2023 <span>smmpanel.ma</span> All Rights Reserved

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection
