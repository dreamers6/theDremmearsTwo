@extends('layout')
@section('hamid')
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
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/login">Sign in</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/api">Api</a>
            </li>
            <li class="nav-item">
            <a href="/register" class="nav-link sign">Sign Up</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
    {{-- filter section start --}}

    {{-- filter section end --}}


    <div class="product-section mt-5">
        <div class="container">
            <div class="header row d-none d-lg-flex text-start align-items-center">
                <div class="id col-lg-1">id</div>
                <div class="services col-lg-6">services</div>
                <div class="min col-lg-1">min</div>
                <div class="max col-lg-1">max</div>
                <div class="max col-lg-1 text-center">rate per <br> 1000</div>
            </div>
            <div class="items-product pt-3 ">
                {{-- <div class="title align-items-center mb-4">
                    <h1 class="m-0" id="title">all</h1>
                </div> --}}
                <div class="row body">
                    @foreach ($services as $service)
                    <div class="col-md-6 col-lg-12 p-1">
                        <div class="card-product p-2">
                            <div class="row align-items-center content">
                                <div class="id col-lg-1 d-flex justify-content-center align-items-center">
                                    <h2 class="m-auto small">{{ $service->service }}</h2>
                                </div>
                                <div class="desc col-lg-6">
                                    <p class="d-block d-lg-none text-center mb-1 mt-3 name">services</p>
                                    <p class="mb-0 text-center text-lg-start val">{{ $service->name }}</p>
                                </div>
                                <div class="min col-lg-1 col-md-6 col-sm-6 col-6">
                                    <p class="d-block d-lg-none text-center mb-1 mt-3 name">min</p>
                                    <p class="text-start mb-0">{{ $service->minn }}</p>
                                </div>
                                <div class="max col-lg-1 col-md-6 col-sm-6 col-6">
                                    <p class="d-block d-lg-none text-center mb-1 mt-3 name">max</p>
                                    <p class="text-start mb-0">{{ $service->maxx }}</p>
                                </div>
                                <div class="rate col-lg-1">
                                    <p class="d-block d-lg-none text-center mb-1 mt-3 name">rate per 1000</p>
                                    <p class="text-center mb-0">{{ $service->rate }}</p>
                                </div>
                                <div class="action col-lg-2 d-flex justify-content-around p-0 text-center">
                                    <button type="button" class="btn btn2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Details
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- <button type="button" class="btn btn2" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                                    <a class="btn btn2" href="#">Buy</a>
                                    <!-- </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination justify-content-center mt-3 text-center">
                    {{ $services->links() }}
                </div>
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
                                <a href="#" class="btn btn-block " data-aos="fade-right"
                                    data-aos-duration="1000">View
                                    Services
                                </a>
                            </div>
                            <div class="col-md-auto col-12">
                                <a href={{ url('Register') }} class="btn btn-danger" data-aos="fade-left"
                                    data-aos-duration="1000">Register
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
