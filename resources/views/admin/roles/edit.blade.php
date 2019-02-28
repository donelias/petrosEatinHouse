@extends('layouts.Admin.app')

@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-list-alt"></i> Roles</li>
        <li class="active"><i class="fa fa-list-alt"></i><i class="fa fa-edit"></i> Editar Role</li>
    </ul>
    <!-- END BREADCRUMB -->

    <div class="col-md-10 col-md-offset-1">
                <div class="card">
                    <div class="card-header">Editar Role {{ $role->name }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/roles') }}" title="Back"><button class="btn btn-warning btn-sm pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::model($role, [
                            'method' => 'PATCH',
                            'url' => ['/admin/roles/' . $role->id],
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data'
                        ]) !!}

                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.roles.partials.form', ['formMode' => 'edit'])


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
