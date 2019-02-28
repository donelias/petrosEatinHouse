@extends('layouts.Admin.app')

@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-list-alt"></i> Roles</li>
        <li class="active"><i class="fa fa-list-alt"></i><i class="fa fa-plus"></i> Crear Role</li>
    </ul>
    <!-- END BREADCRUMB -->

    <div class="col-md-10 col-md-offset-1">
                <div class="card">
                    <div class="card-header">Create New Role</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/roles') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


                        <form method="POST" action="{{ url('/admin/roles/store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('POST') }}
                            {{ csrf_field() }}

                            @include ('admin.roles.partials.form', ['formMode' => 'Crear Role'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
