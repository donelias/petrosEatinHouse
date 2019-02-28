@extends('layouts.Admin.app')

@section('content')


    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-list-alt"></i> Productos</li>
        <li class="active"><i class="fa fa-dashboard"></i> Crear Producto</li>
    </ul>
    <!-- END BREADCRUMB -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Product</div>
                    <div class="panel panel-body panel-default">
                        <div class="col col-md-8">
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

                                {!! Form::open(['url' => '/admin/products', 'class' => 'form-horizontal', 'files' => true, 'accept-charset' => 'UTF-8', 'enctype' => 'multipart/form-data']) !!}
                                {{ csrf_field() }}

                                @include ('admin.products.form', ['formMode' => 'create'])

                                {!! Form::close() !!}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
