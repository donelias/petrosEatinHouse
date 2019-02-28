@extends('layouts.Store.app')
@section('title', "Contactos")
@section('content')

    <section class="home-slider owl-carousel img" style="background-image: url(store/images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(etore/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Contactanos</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Inicio</a></span> <span><a href="{{route('contact')}}">Nuestros Contactos</a></span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Contact Information</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Direccion:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Telefonos:</span> <a href="tel://8299309423">+ 1235 2355 98</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Correo Electronico:</span> <a href="mailto:info@yoursite.com">info@petroseatinghouse.com</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Pagina Web:</span> <a href="www.petroseatinghouse.com">petroseatinghouse.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div id="map"></div>


    {{--
    <!-- banner1 -->
    <div class="banner1">
        <div class="container">
        </div>
    </div>
    <!-- //banner1 -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Como Ubicarnos</h1>
            <div class="contact-bottom wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.8903470940953!2d-70.53119847087379!3d19.388135499181868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1d12b931e312b%3A0x3684ccf09cc1ee18!2sUnnamed+Road%2C+Moca+56000%2C+Rep%C3%BAblica+Dominicana!5e0!3m2!1ses-419!2sve!4v1535507623376" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 contact-left wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h4>Dirección</h4>
                <h2>Autopista Ramon Caceres, Edif Farmacia Naraly
                    <span>Moca, República Dominicana</span></h2>
                <ul>
                    <li>Teléfono :+1 849 941 8356</li>
                    <li>Celular :+1 829 713 4979</li>
                    <li><a href="#">info@petroseatinghouse.com</a></li>
                </ul>
            </div>
            <div class="col-md-8 contact-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h4>Formulario de Contacto</h4>
                <form action="{{route('message')}}" method="get">
                    <input type="text" name="name" id="name" value="Nombre y Apellido" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre y Apellido';}" required="">
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                    <input type="email" name="email" id="email" value="Correo Electrónico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo Electrónico';}" required="">
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                    <input type="text" name="telephone" id="telephone" value="Telefono" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefono';}" required="">
                    {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
                    <textarea type="text" name="message" id="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje...';}" required="">Mensaje...</textarea>
                    {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
                    <input type="submit" value="Enviar" >
                    <input type="reset" value="Limpiar Formulario" >

                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //contact -->

    --}}
@endsection