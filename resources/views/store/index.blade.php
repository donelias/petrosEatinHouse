@extends('layouts.Store.app')
@section('title', "Inicio")
@section('content')

    <section class="home-slider owl-carousel img" style="background-image: url(store/images/bg_1.jpg);">
        <div class="slider-item" style="background-image: url(store/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Bienvenid@</span>
                        <h1 class="mb-4">Cocinamos tu receta Dominico-Venezolana deseada</h1>
                        <p class="mb-4 mb-md-5">Desguta de las mejores comidas venezolanas y dominicanas que tenemos para ti.</p>
                        <p>{{-- <a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>--}} <a href="{{route('menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Menu</a></p>
                    </div>

                </div>
            </div>
        </div>
        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">

                    <div class="col-md-6 col-sm-12 ftco-animate">
                        <span class="subheading">Deliciosos</span>
                        <h1 class="mb-4">Bollitos de Yuca</h1>
                        <p class="mb-4 mb-md-5">Rellenos de carne de res, pollo, queso y mixto.</p>
                        <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <img src="store/images/slider/DSC_0007.png" style="width:600px; height:350px;" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">

                    <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
                        <span class="subheading">Deliciosas</span>
                        <h1 class="mb-4">Arepas Venezolanas</h1>
                        <p class="mb-4 mb-md-5">Con una gran variedad de rellenos para degustar del autentico sabor venezolano.</p>
                        <p>{{-- <a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>--}} <a href="{{route('menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Menu</a></p>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <img src="store/images/slider/arepas-3.png" style="width:600px; height:350px;" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">

                    <div class="col-md-6 col-sm-12 ftco-animate">
                        <span class="subheading">Dulces</span>
                        <h1 class="mb-4">Quesillos</h1>
                        <p class="mb-4 mb-md-5">Disfruta de la mejor calidad que tenemos para ti.</p>
                        <p>{{-- <a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>--}} <a href="{{route('menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Menu</a></p>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <img src="store/images/slider/DSC_0050.png" style="width:400px; height:600px;" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>+1 829 253 5185</h3>
                                <p><i class="fab fa-whatsapp-square"></i> + 829 930 9423</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3>Aut. Ramón Cáceres</h3>
                                <p>200 mts de la bomba las Palmas</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Abierto Lunes-Sabado</h3>
                                <p>7:00am - 10:00am 4:00pm - 9:00pm</p>
                                <h3>Abierto Domingo</h3>
                                <p>3:00pm - 9:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                    <ul class="social-icon">
                        <li class="ftco-animate"><a href="https://es-la.facebook.com/fondadepetro/"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/petroseatinghouse/"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url(images/about.jpg);"></div>
        <div class="ftco-animate">
            <img src="store/images/slider/logo-sin-fondo.png" style="width:400px; height:300px;" class="img-fluid" alt="">
        </div>
        <div class="one-half ftco-animate">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">Bienvenido a <br><span class="flaticon-chef">Petro's</span> Eating House</h2>
            </div>
            <div>
                <p>Somos una empresa personalizada en ofecer una gran variedad de comina rapida, dominicana y venezolona, de manera indivinual asi como para evento, con calidad y en tiempo recod, logrando la satisfaccion de nuestros clientes.</p>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Nuestros Servicios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Alimentos Saludables</h3>
                            <p>Calidad y frescura en todos nuestros productos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-bicycle"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Entrega Rápida</h3>
                            <p>Contamos con un equipo especializado para que sus entregas se realicen con calidad y eficiencia. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-chef"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Recetas Originales</h3>
                            <p>Nuestras recetas provienen de <strong>'MAMA PETRO'</strong> y se mantien para que los platos en cuention puedan recrearce con los mismos resultados.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-menu">
        <div class="container-fluid">
            <div class="row d-md-flex">
                <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">
                </div>
                <div class="col-lg-8 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <h3 class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Nuevas Promociones</h3>
                            <p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Subscribe tu correo electrónico para recibir todas nuestaras promociones
                                y nuevos productos deliciosos para degustar.</p>
                            <div class="col-md-6 ftco-animate">
                                <form action="{{route('subscription')}}" method="get" class="contact-form">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <input type="mail" id="email" name="email" class="form-control" placeholder="Ingrese correo electrónico">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
                                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <div class="banner-info">
                <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms" style="color: #171a1d;">El mejor lugar para deliciosas comidas.<span>Desgusta de la gran variedad de frituras que tenemos para la familia y para ti.</span></h1>
                <div class="banner-info1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <ul id="flexiselDemo1">
                        @foreach($products as $product)
                            <li>
                                <div class="banner-info1-grid">
                                    <img src="{{ $product->image}}" alt=" " class="img-responsive" style="width: 200px; height: 200px;" />
                                    <h3 style="color: #171a1d;">{{$product->name}}</h3>
                                    <a href="{{ route('product-detail', $product->slug) }}"><button class="btn btn-default">RD$ {{$product->price}}</button></a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint:480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint:640,
                                        visibleItems:2
                                    },
                                    tablet: {
                                        changePoint:768,
                                        visibleItems: 2
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="{{ asset('store/js/jquery.flexisel.js')}}"></script>
                    <div class="more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <a href="#" class="hvr-curl-bottom-right">Leer Mas...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- banner-bottom  Arepas y Empanadas-->
    <div class="banner-bottom">
        <div class="container">
            <div class="banner-bottom-grids">
                <div class="col-md-5 banner-bottom-grid wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>Arepas Venezolana</h2>
                    <p>"La arepa es un alimento de origen precolombino de Colombia y
                        Venezuela, hecho a base de masa de maíz seco molido o
                        de harina de maíz precocida, de forma circular y aplanada.
                        Es consumido de manera tradicional en las gastronomías de Colombia y Venezuela.</p>
                    <div class="more">
                        <a class="hvr-curl-bottom-right">Desde RD$ 60.00 Und.</a>
                    </div>
                </div>
                <div class="col-md-7 banner-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="banner-bottom-grid1">
                        <img src="{{ asset('store/images/1.jpg')}}" alt=" " class="img-responsive" style="width: 600px; height: 400px;" />
                        <div class="banner-bottom-grid-pos">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                    <span class="sr-only">30% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress1">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress2">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                    <span class="sr-only">30% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="banner-bottom-grids">
                <div class="col-md-6 banner-bottom-grid-1 wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="banner-bottom-grid-11">
                        <img src="{{ asset('store/images/22.jpg')}}" alt=" " class="img-responsive" style="width: 300px; height: 400px;" />
                        <div class="banner-bottom-grid-11-pos">
                            <p>Deliciosas empanadas venezolanas pre-empacadas listas
                            para freirlas en casa con la familia o con los amigos.
                            Su presentacion viene en varios tamaños. Cada empaque tiene mínimo 6 unidades.</p>
                            <div class="more m1">
                                <a href="#" class="hvr-curl-bottom-right">Pidelas Ya!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 banner-bottom-grid-1 wow fadeInLeftBig" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <h3>Deliciosas empanadas en base a harina de maiz precocida.</h3>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //banner-bottom -->
    <!-- newsletter subscripcion-->
    <div class="newsletter">
        <div class="container">
            <div class="newsletter-info">
                <h3 class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Nuevas Promociones</h3>
                <p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Subscribe tu correo electrónico para recivir todas nuestaras promociones
                    y nuevos productos deliciosos para degustar.</p>
                <form action="{{route('subscription')}}" method="get" class="wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <input type="mail" id="email" name="email" value="Ingrese correo electrónico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ingrese correo electrónico';}" required="">
                    <input type="submit" value="Enviar">
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </form>
            </div>
        </div>
    </div>
    <!-- //newsletter -->
    <!-- newsletter-bottom -->
    <div class="newsletter-bottom">
        <div class="container">
            <div class="newsletter-bottom-grids">
                <div class="col-md-6 newsletter-bottom-grid wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>Bollos de Yuca</h3>
                    <p>Los bollitos de yuca al estilo dominicano tiene diferentes variantes,
                        pueden ser rellenos de queso o con un toque dulce de anís, lo que si tienen
                        en común cada una de las preparaciones es que son crujientes
                        por fuera y suaves por dentro.</p>
                    <div class="more">
                        <a href="#" class="hvr-curl-bottom-right">Pidelo Ya!</a>
                    </div>
                </div>
                <div class="col-md-6 newsletter-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="{{ asset('store/images/4.jpg')}}" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="newsletter-bottom-grids">
                <div class="col-md-6 newsletter-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="{{ asset('store/images/5.jpg')}}" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 newsletter-bottom-grid  wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>Degustación de las mejores salsas</h3>
                    <p>Ya sea con tequeños, empanadas, pastelitos o bolitas de carne,
                        una buena salsa hará que tu degustación sea mejor por mucho.</p>
                    <div class="more">
                        <a href="#" class="hvr-curl-bottom-right">Pidela Ya!</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //newsletter-bottom -->
    --}}

@endsection