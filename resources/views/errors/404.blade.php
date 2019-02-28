@extends('layouts.Admin.app')

@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-exclamation-circle"></i> Error 404</li>
        <li class="active"><i class="fa fa-file"></i> P&aacutegina no encontrada</li>
    </ul>
    <!-- END BREADCRUMB -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    <div class="error-container">
                        <div class="error-code">404</div>
                        <div class="error-text">page not found</div>
                        <div class="error-subtext">Unfortunately we're having trouble loading the page you are looking for. Please wait a moment and try again or use action below.</div>
                        <div class="error-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-info btn-block btn-lg" onClick="document.location.href = 'index.html';">Back to dashboard</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary btn-block btn-lg" onClick="history.back();">Previous page</button>
                                </div>
                            </div>
                        </div>
                        <div class="error-subtext">Or you can use search to find anything you need.</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" placeholder="Search..." class="form-control"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@endsection
