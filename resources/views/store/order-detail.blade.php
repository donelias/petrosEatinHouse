@extends('layouts.Store.app')
@section('title', "Detalles de la Orden")
@section('content')
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{route('index')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
				<li class="active"><i class="glyphicon glyphicon-shopping-cart"></i> Detalles del Pedido</li>
			</ol>
		</div>
	</div>
	<hr>
	<!-- //breadcrumbs -->
	<div class="container text-center well ">
	<div class="row">
  	<div class="col-md-10 col-md-offset-1">
		<div class="page-header">
			<h1><i class="glyphicon glyphicon-shopping-cart"></i> Detalle del pedido</h1>
		</div>

		<div class="page">
			<div class="table-responsive ">
				<h3>Datos del usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					{{--
					<tr><td>Nombre:</td><td>{{ Auth::user()->person->name . " " . Auth::user()->person->last_name }}</td></tr>
					<tr><td>Usuario:</td><td>{{ Auth::user()->username }}</td></tr>
					--}}
					<tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
					{{--
					<tr><td>Dirección:</td><td>{{ Auth::user()->person->address }}</td></tr>
					--}}
				</table>
			</div>
			<div class="table-responsive">
				<h3>Datos del pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
					</tr>
					@foreach($cart as $item)
						<tr>
							<td>{{ $item->name }}</td>
							<td>${{ number_format($item->price,2) }}</td>
							<td>{{ $item->quantity }}</td>
							<td>${{ number_format($item->price * $item->quantity,2) }}</td>
						</tr>
					@endforeach
				</table><hr>
				<h3>
					<span class="label label-success">
						Total: ${{ number_format($total, 2) }}
					</span>
				</h3><hr>
				<p>
				<br>
					<div class="col col-md-8 col-md-offset-2">
						<a href="{{ route('process-order') }}" class="btn btn-info btn-block">
							<span class="fa fa-bank"></span> Procesar Orden <i class="fa fa-chevron-circle-right"></i></i>
						</a>
					</div>
					<hr>
					<a href="{{ route('cart-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>


				</p>
			</div>
		</div>
	</div>
	</div>
	</div>

@endsection