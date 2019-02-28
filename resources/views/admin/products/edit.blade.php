@extends('layouts.Admin.app')

@section('content')


    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-list-alt"></i> Productos</li>
        <li class="active"><i class="fa fa-dashboard"></i> Editar Producto</li>
    </ul>
    <!-- END BREADCRUMB -->
    <div class="col-md-6 col-md-offset-1">
                <div class="card">
                    <div class="card-header">Edit Product #{{ $product->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


                        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PATCH', 'files' => true]) !!}
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.products.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
@endsection
