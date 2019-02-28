@extends('layouts.Admin.app')

@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><i class="fa fa-money"></i> Pagos</li>
        <li class="active"><i class="fa fa-money"></i> Crear Pago</li>
    </ul>
    <!-- END BREADCRUMB -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3>Pagar Orden</h3>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">no.<strong>{{$order->no_order}}</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Por Favor ingrese los datos requeridos!</h4>
                                    </div>
                                    <div class="panel-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">No. Orden</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" class="form-control" name="no_order" value="{{$order->no_orden}}"/>
                                                        </div>
                                                        <span class="help-block">This is sample of text field</span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Password</label>
                                                    <div class="col-md-9 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                            <input type="password" class="form-control"/>
                                                        </div>
                                                        <span class="help-block">Password field sample</span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Textarea</label>
                                                    <div class="col-md-9 col-xs-12">
                                                        <textarea class="form-control" rows="5"></textarea>
                                                        <span class="help-block">Default textarea field</span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">File</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>
                                                        <span class="help-block">Input type file</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Datepicker</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input type="text" class="form-control datepicker" value="2014-11-01">
                                                        </div>
                                                        <span class="help-block">Click on input field to get datepicker</span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Tags</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="tagsinput" value="First,Second,Third"/>
                                                        <span class="help-block">Default textarea field</span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Select</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control select">
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                            <option>Option 4</option>
                                                            <option>Option 5</option>
                                                        </select>
                                                        <span class="help-block">Select box example</span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Checkbox</label>
                                                    <div class="col-md-9">
                                                        <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Checkbox title</label>
                                                        <span class="help-block">Checkbox sample, easy to use</span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="panel-footer">
                                        <button class="btn btn-default">Clear Form</button>
                                        <button class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
        </div>
    </div>
@endsection
