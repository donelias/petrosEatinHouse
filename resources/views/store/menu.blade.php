@extends('layouts.Store.app')
@section('title', "Menu")
@section('content')


    <section class="home-slider owl-carousel img" style="background-image: url(store/images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(store/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Nuestro Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Inicio</a></span> <span class="mr-2"><a href="{{route('menu')}}">Menu</a></span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Menu Destacado</h2>
                </div>
            </div>
        </div>

        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                @foreach($products_3 as $products_3)
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url({{$products_3->image}});"></a>
                        <div class="text p-4">
                            <h3>{{$products_3->name}}</h3>
                            <p> {{$cadena =str_limit($products_3->content, 50)}}</p>
                            <a href="{{ route('product-detail', $products_3->slug) }}" class="hvr-curl-bottom-right btn-xs">Leer Mas...</a>
                            <br>
                            @if($products_3->offer == 'ENABLE')<span class="btn btn-xs btn-success">Oferta</span>@endif
                            <p class="price"><span>RD$ {{$products_3->price}} </span> <a href="{{ route('cart-add', $products_3->slug) }}" class="ml-2 btn btn-white btn-outline-white">Agregar</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($products_3_3 as $products_3_3)
                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img order-lg-last" style="background-image: url({{$products_3_3->image}});"></a>
                            <div class="text p-4">
                                <h3>{{$products_3_3->name}}</h3>
                                <p> {{$cadena =str_limit($products_3_3->content, 50)}}</p>
                                <a href="{{ route('product-detail', $products_3_3->slug) }}" class="hvr-curl-bottom-right btn-xs">Leer Mas...</a>
                                <br>
                                @if($products_3_3->offer == 'ENABLE')<span class="btn btn-xs btn-success">Oferta</span>@endif
                                <p class="price"><span>RD$ {{$products_3_3->price}} </span> <a href="{{ route('cart-add', $products_3_3->slug) }}" class="ml-2 btn btn-white btn-outline-white">Agregar</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Nuestro Menu Principal</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-6">
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{$product->image}});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{$product->name}}</span></h3>
                                <span class="price">RD$ {{$product->price}}</span>
                            </div>
                            <div class="d-block">
                                <p> {{$cadena =str_limit($product->content, 30)}} <a href="{{ route('cart-add', $product->slug) }}" class="ml-2 btn btn-white btn-outline-white pull-right">Agregar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{--
    <!-- banner1 -->
    <div class="banner1">
        <div class="container">
        </div>
    </div>
    <!-- //banner1 -->
    <!-- products -->
    <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-grids">
                            <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">@if(Route::Is('offer')) Productos en Oferta @else Lista de Productos @endif</h1>
                            @foreach($products as $product)
                                <div class="col col-md-4 margen-2" >
                                    <div class="col-md-12">
                                        <img src="{{$product->image}}" alt=" " class="img-responsive" style="border-radius: 150px; width: 300px; height: 300px;" />
                                        <div class="service-grd-pos" style="height: 200px; width: 200px;">
                                            <h4>eum fugiat quo nulla</h4>
                                            <div class="more m2">
                                                <a href="{{ route('product-detail', $product->slug) }}" class="hvr-curl-bottom-right btn-xs">Leer Mas...</a>
                                                <br>
                                                @if($product->offer == 'ENABLE')<span class="btn btn-xs btn-success">Oferta</span>@endif

                                            </div>
                                        </div>
                                        <div class="service-grd-pos2">
                                            <p>RD$ {{$product->price}} || <a href="{{ route('cart-add', $product->slug) }}"><i class="glyphicon glyphicon-shopping-cart">Agregar</i></a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination-wrapper text-center"> {!! $products->appends(['search' => Request::get('search')])->render() !!}</div>

    <!-- //products -->
    <!-- Categories -->
    @include('store.partials.category')
    <!-- //Categories -->
    --}}
@endsection