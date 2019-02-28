@extends('layouts.Store.app')
@section('title', "Detalles del Producto")
@section('content')
    <!-- banner1 -->
    <div class="banner1">
        <div class="container">
        </div>
    </div>
    <!-- //banner1 -->
    <!-- single -->
    <div class="single">
        <div class="container">
            <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">{{$product->name}}</h1>
            <div class="single-left wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Publicado el <span>{{$product->created_at}}</span></p>
                <img src="{{$product->image}}" alt=" " class="img-responsive" />
            </div>
            <div class="single-right wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-md-2 col-md-offset-10">
                    @if($product->offer == 'ENABLE')<span class="btn btn-xs btn-success">Oferta</span>@endif
                </div>
                <h2>Caracteristicas del Producto</h2>
                <p><span>{{$product->content}}</span></p>
                <hr>
                <div class="col-md-6">
                    <a href="{{route('menu')}}" class="btn-lg btn-info btn-block text-center"><i class="glyphicon glyphicon-chevron-left">Regresar</i></a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('cart-add', $product->slug) }}" class="btn-lg btn-warning btn-block text-center"><i class="glyphicon glyphicon-shopping-cart">Agregar</i></a>
                </div>
            </div>
            <div class="clearfix"> </div>
            <!-- Categories -->
            @include('store.partials.category')
            <!-- //Categories -->

            <!-- comentarios -->
            <div class="three-com">
                <h3 class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">() Commentarios <span>en</span> <label>{{$product->name}}</label></h3>
                <div class="tom-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="tom">
                        <img src="{{ asset('store/images/co.png')}}" alt=" " />
                    </div>
                    <div class="tom-right">
                        <div class="Hardy">
                            <h4>Tom Hardy</h4>
                            <p><label>10 September 2015</label></p>
                        </div>
                        <div class="reply">
                            <a href="#">Reply</a>
                        </div>
                        <div class="clearfix"> </div>
                        <p class="lorem">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="tom-grid humour wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="tom">
                        <img src="images/co.png" alt=" " />
                    </div>
                    <div class="tom-right">
                        <div class="Hardy">
                            <h4>Prad Pitt</h4>
                            <p><label>10 September 2015</label></p>
                        </div>
                        <div class="reply">
                            <a href="#">Reply</a>
                        </div>
                        <div class="clearfix"> </div>
                        <p class="lorem">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="tom-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="tom">
                        <img src="images/co.png" alt=" " />
                    </div>
                    <div class="tom-right">
                        <div class="Hardy">
                            <h4>Tom Cruis</h4>
                            <p><label>10 September 2015</label></p>
                        </div>
                        <div class="reply">
                            <a href="#">Reply</a>
                        </div>
                        <div class="clearfix"> </div>
                        <p class="lorem">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //comentarios -->
            <div class="leave-comment wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h3>Leave your comment</h3>
                <p>Suspendisse tempor tellus sed nisl semper, quis condimentum turpis pharetra.</p>
                <form action="{{route('comment')}}" method="POST">
                    {{ csrf_field() }}
                    <textarea placeholder="Message" required=" " name="content"></textarea>
                    <input type="hidden" name="product_slug" value="{{$product->slug}}">
                    @if(!Auth::check())
                        <input type="hidden" name="product_slug" value="">
                    @else
                        <input type="hidden" name="product_slug" value="{{ Auth::user()->id }}">
                    @endif
                    <input type="submit" value="Agregar Comentario">
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //single -->
@endsection