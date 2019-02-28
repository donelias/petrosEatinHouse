@extends('layouts.Admin.app')

@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-list-alt"></i> Ordenes</li>
        <li class="active"><i class="fa fa-dashboard"></i> Lista de Ordenes</li>
    </ul>
    <!-- END BREADCRUMB -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                        <form method="GET" action="{{ url('orders') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary btn-block" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <h3>Lista de Ordenes</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>No Order</th><th>Subtotal</th><th>Impuesto</th><th>Total</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->no_order }}</td><td>{{ $item->subtotal }}</td><td>{{ $item->tax }}</td><td>{{ $item->total }}</td>
                                        <td>
                                            @can('orders.show')
                                            <a href="{{ url('orders/' . $item->id) }}" title="View Order"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            @endcan
                                            @can('orders.edit')
                                            <a href="{{ url('orders/' . $item->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            @endcan
                                            @can('orders.destroy')
                                            <form method="POST" action="{{ url('orders' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Orden" onclick="return confirm(&quot;Eliminar Orden la orden No.{{ $item->no_order }}?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                             @endcan
                                        </td>
                                        <td>
                                            @if($item->status->id == 1)
                                                <button class="btn btn-info">{{$item->status->name}}</button>
                                            @elseif($item->status->id == 2)
                                                <button class="btn btn-default">{{$item->status->name}}</button>
                                            @elseif($item->status->id == 3)
                                                <button class="btn btn-warning">{{$item->status->name}}</button>
                                            @elseif($item->status->id == 4)
                                                <button class="btn btn-primary">{{$item->status->name}}</button>
                                            @elseif($item->status->id == 5)
                                                <button class="btn btn-default">{{$item->status->name}}</button>
                                            @elseif($item->status->id == 6)
                                                <button class="btn btn-success">{{$item->status->name}}</button>
                                            @endif
                                            @if($item->status->id == 3 )
                                                    <a href="{{ url('orders/' . $item->no_order . '/payment') }}" class="btn btn-primary"><i class="fa fa-money"> Pagar Orden</i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $orders->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
