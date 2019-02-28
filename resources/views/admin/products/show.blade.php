@extends('layouts.Admin.app')

@section('content')


    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-list-alt"></i> Productos</li>
        <li class="active"><i class="fa fa-dashboard"></i> Detalles del Producto</li>
    </ul>
    <!-- END BREADCRUMB -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ url('/admin/products') }}" title="Regresar"><button class="btn btn-warning btn-sm pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        @can('products.edit')
                            <a href="{{ url('/admin/products/' . $product->id . '/edit') }}" title="Editar Producto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        @endcan
                        @can('products.delete')
                            <form method="POST" action="{{ url('/admin/products' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Producto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                            </form>
                        @endcan
                        <br/>
                        <br/>
                        <div class="col col-md-8">
                            <div class="timeline-item-content">
                                <div class="timeline-heading padding-bottom-0">
                                   {{$product->name}}
                                </div>
                                <div class="timeline-body">
                                    <img src="{{$product->image}}" width="200" class="img-text" align="left"/>
                                    <h4>{{$product->name}}</h4>
                                    <p style="text-align: justify">{{$product->content}}</p>
                                    @if($product->offer == 'ENABLE')
                                        <span class="btn btn-lg btn-success"><i class="fa fa-tags"></i>Oferta</span>
                                    @endif
                                    <h3>RD$ {{ $product->price }}</h3>
                                    <a href="{{ route('cart-add', $product->slug) }}" class="btn btn-lg btn-warning pull-right btn-block"><i class="fa fa-shopping-cart fa-2x"> Agregar</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
