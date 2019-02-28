@extends('layouts.Admin.app')

@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-list-alt"></i> Productos</li>
        <li class="active"><i class="fa fa-dashboard"></i> Lista de Productos</li>
    </ul>
    <!-- END BREADCRUMB -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @can('products.create')
                    <a href="{{ url('/admin/products/create') }}" class="btn btn-success btn-sm pull-right" title="Add New Product">
                        <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo Producto
                    </a>
                @endcan
                <form method="GET" action="{{ url('/admin/products') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                        <span class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th><th>Codigo</th><th>Descripci&oacuten</th><th>Precio</th><th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td>{{ $loop->iteration or $item->id }}</td>
                                <td>{{ $item->code }}</td><td>{{ $item->name }}</td><td>@if($item->offer == 'ENABLE')<span class="btn btn-xs btn-success">Oferta</span>@endif RD$ {{ $item->price }} <a href="{{ route('cart-add', $item->slug) }}" class="btn btn-xs "><i class="glyphicon glyphicon-shopping-cart">Agregar</i></a></td>
                                <td>

                                    @can('products.show')
                                        <a href="{{ url('/admin/products/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Datelles</button></a>
                                    @endcan
                                    @can('products.edit')
                                       <a href="{{ url('/admin/products/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                    @endcan
                                    @can('products.destroy')
                                       <form method="POST" action="{{ url('/admin/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Desea Eliminar el producto {{ $item->name }}?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>
            </div>
        </div>
    </div>

@endsection
