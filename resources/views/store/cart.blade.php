@extends('layouts.Store.app')
@section('title', "Carrito de Compra")
@section('content')
	<style>
		body{
			margin-top: 0px;
		}
	</style>
<div class="container text-center">
		<div class="page-header">
			<h1><i class="glyphicon glyphicon-shopping-cart"></i> Carrito de compras</h1>
		</div>

		<div class="table-cart table-responsive">
			@if(count($cart))
				<a href="{{ route('cart-trash') }}" class="btn btn-danger">
					Vaciar carrito <i class="glyphicon glyphicon-trash"></i>
				</a>
				<hr>
			<div class="table table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
							<th>Quitar</th>
						</tr>
					</thead>
					<tbody>
					@foreach($cart as $item)
						<tr>
							<td><a href="{{ route('product-detail', $item->slug) }}"><img src="{{ $item->image }}" style="right: 30px; width: 30px;"></a></td>
							<td>{{ $item->name }}</td>
							<td>${{ number_format($item->price,2) }}</td>
							<td colspan="1">
								<input
										type="number"
										min="1"
										max="100"
										value="{{ $item->quantity }}"
										id="product_{{ $item->id }}"
								>
								<a
										href="#"
										class="btn btn-warning btn-update-item"
										data-href="{{ url('cart/update', $item->slug) }}"
										data-id = "{{ $item->id }}"
								>
									<i class="glyphicon glyphicon-refresh"></i>
								</a>
							</td>
							<td>${{ number_format($item->price * $item->quantity,2) }}</td>
							<td>
								<a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
									<i class="glyphicon glyphicon-remove"></i>
								</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<hr>
				<h3>
						Total a Pagar: RD$ {{ number_format($total,2) }}
				</h3>

			</div>
			@else
				<h3><span class="label label-warning">No hay productos en el carrito</span></h3>
			@endif
			<hr>
				<a href="{{ route('offer') }}" class="btn btn-primary">
					<i class="glyphicon glyphicon-chevron-left"></i> Seguir comprando
				</a>
				@if(count($cart))
				<a href="{{ route('order-detail') }}" class="btn btn-success ">
				 Continuar <i class="glyphicon glyphicon-chevron-right"></i>
				</a>
				@endif
		</div>
	<hr>

	</div>

@endsection
