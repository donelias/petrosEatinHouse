@extends('layouts.Admin.app')

@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-list-alt"></i> Usuarios</li>
        <li class="active"><i class="fa fa-users"></i><i class="fa fa-edit"></i> Editar de Usuarios</li>
    </ul>
    <!-- END BREADCRUMB -->

    <div class="col-md-10 col-md-offset-1">
        <div class="card">
                <div class="card">
                    <div class="card-header">Editar Usuario: {{ $user->name }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-sm pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($user, [
                            'method' => 'PATCH',
                            'url' => ['/admin/users/' . $user->id],
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data'
                        ]) !!}

                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.users.partials.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
