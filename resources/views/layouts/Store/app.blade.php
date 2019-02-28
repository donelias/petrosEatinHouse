<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PetrosEatingHouse') }} - @yield('title') </title>


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('store/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('store/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('store/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('store/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('store/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{ asset('store/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/style.css')}}">
<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}"><span class="flaticon-chef mr-1"></span>Petro's<br><small>Eating House</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item @if(Route::is('cart-show')) active @endif"><a href="{{route('cart-show')}}" class="nav-link"><i class="fas fa-shopping-cart fa-2x"></i></a></li>
                    <li class="nav-item @if(Route::is('index')) active @endif"><a href="{{route('index')}}" class="nav-link">Inicio</a></li>
                    <li class="nav-item @if(Route::is('menu') OR Route::is('menu-category')) active @endif"><a href="{{route('menu')}}" class="nav-link">Menu</a></li>
                    <li class="nav-item @if(Route::is('offer')) active @endif"><a href="{{route('offer')}}" class="nav-link">Ofertas</a></li>
                    <li class="nav-item @if(Route::is('about')) active @endif"><a href="{{route('about')}}" class="nav-link">Nuestro Equipo</a></li>
                    <li class="nav-item @if(Route::is('contact')) active @endif"><a href="{{route('contact')}}" class="nav-link">Contactos</a></li>
                    <!-- Authentication Links -->
                    @if(!Auth::check())
                        <li class="nav-item @if(Route::is('login')) active @endif"><a href="{{route('login')}}" class="nav-link">Iniciar Session</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <ul>
                                    <a href="{{route('home')}}">Mi Cuenta</a>
                                </ul>
                                <ul>
                                    <a class="dropdown-item" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="glyphicon glyphicon-log-out"></i>Salir
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>

                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- header -->

    <!-- page content -->
    @if(\Session::has('flash_message'))
        @include('layouts.Store.message')
    @endif
    <!-- page content -->
    @yield('content')

    <!-- footer -->


    {{--
    <section class="ftco-menu">
        <div class="container-fluid">
            <div class="row d-md-flex">
                <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">
                </div>
                <div class="col-lg-8 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Burgers</a>

                                <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-1.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Itallian Pizza</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-2.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Itallian Pizza</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-3.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Itallian Pizza</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Lemonade Juice</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Pineapple Juice</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Soda Drinks</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-1.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Itallian Pizza</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-2.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Itallian Pizza</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-3.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Itallian Pizza</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-1.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Itallian Pizza</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-2.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Itallian Pizza</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-3.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Itallian Pizza</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Hot Pizza Meals</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(images/pizza-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Italian Pizza</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(images/pizza-2.jpg);"></a>
                        <div class="text p-4">
                            <h3>Greek Pizza</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(images/pizza-3.jpg);"></a>
                        <div class="text p-4">
                            <h3>Caucasian Pizza</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(images/pizza-4.jpg);"></a>
                        <div class="text p-4">
                            <h3>American Pizza</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(images/pizza-5.jpg);"></a>
                        <div class="text p-4">
                            <h3>Tomatoe Pie</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(images/pizza-6.jpg);"></a>
                        <div class="text p-4">
                            <h3>Margherita</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Menu Pricing</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/pizza-1.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Italian Pizza</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/pizza-2.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Hawaiian Pizza</span></h3>
                                <span class="price">$29.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/pizza-3.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Greek Pizza</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/pizza-4.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Bacon Crispy Thins</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/pizza-5.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Hawaiian Special</span></h3>
                                <span class="price">$49.91</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/pizza-6.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Ultimate Overload</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/pizza-7.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Bacon Pizza</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/pizza-8.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Ham &amp; Pineapple</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-pizza-1"></span></div>
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Pizza Branches</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-medal"></span></div>
                                    <strong class="number" data-number="85">0</strong>
                                    <span>Number of Awards</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-laugh"></span></div>
                                    <strong class="number" data-number="10567">0</strong>
                                    <span>Happy Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-chef"></span></div>
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Staff</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Recent from blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-appointment">
        <div class="overlay"></div>
        <div class="container-wrap">
            <div class="row no-gutters d-md-flex align-items-center">
                <div class="col-md-6 d-flex align-self-stretch">
                    <div id="map"></div>
                </div>
                <div class="col-md-6 appointment ftco-animate">
                    <h3 class="mb-3">Contact Us</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="d-me-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    --}}

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Sobre Nosotros</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://es-la.facebook.com/fondadepetro/"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/petroseatinghouse/"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul>
                            <li><a href="{{route('index')}}">Inicio</a></li>
                            <li><a href="{{route('menu')}}">Menu</a></li>
                            <li><a href="{{route('about')}}">Nuestro Equipo</a></li>
                            <li><a href="{{route('contact')}}">Contactos</a></li>
                            <li><a href="{{route('offer')}}">Ofertas Destacadas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Categorias</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Platano</a></li>
                            <li><a href="#" class="py-2 d-block">Yuca</a></li>
                            <li><a href="#" class="py-2 d-block">Maiz</a></li>
                            <li><a href="#" class="py-2 d-block">Otros</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Comidas destacadas</h2>
                        <div class="block-23 mb-3">
                            <div class="footer-grd">
                                <a href="#"><img src="{{ asset('store/images/slider/1.jpg')}}" style="width:100px; height:100px;" class="img-responsive" alt=" " /></a>
                                <a href="#"><img src="{{ asset('store/images/slider/22.jpg')}}" style="width:100px; height:100px;" class="img-responsive" alt=" " /></a>
                            </div>
                            <div class="footer-grd">
                                <a href="#"><img src="{{ asset('store/images/slider/5.jpg')}}" style="width:100px; height:100px;" class="img-responsive" alt=" " /></a>
                                <a href="#"><img src="{{ asset('store/images/slider/4.jpg')}}" style="width:100px; height:100px;" class="img-responsive" alt=" " /></a>
                            </div>
                            <div class="footer-grd">
                                <a href="#"><img src="{{ asset('store/images/slider/DSC_0048.JPG')}}" style="width:100px; height:100px;" class="img-responsive" alt=" " /></a>
                                <a href="#"><img src="{{ asset('store/images/slider/6.jpg')}}" style="width:100px; height:100px;" class="img-responsive" alt=" " /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los Derechos Reservados | Petro's Eating House 2019
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



<!-- Scripts -->
    <script src="{{ asset('store/js/jquery.min.js')}}"></script>
    <script src="{{ asset('store/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('store/js/popper.min.js')}}"></script>
    <script src="{{ asset('store/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('store/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('store/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('store/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('store/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('store/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('store/js/aos.js')}}"></script>
    <script src="{{ asset('store/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('store/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('store/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset('store/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('store/js/google-map.js')}}"></script>
    <script src="{{ asset('store/js/main.js')}}"></script>
    @yield('script')
    <!-- //for bootstrap working -->
</body>
</html>
