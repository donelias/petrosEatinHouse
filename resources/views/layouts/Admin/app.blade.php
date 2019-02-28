<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('admin/css/theme-default.css') }}"/>
    <!-- EOF CSS INCLUDE -->

</head>
<body>

<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
        <!-- START X-NAVIGATION -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="{{route('home')}}">Petro's Admin</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <a href="#" class="profile-mini">
                    <img src="{{ asset('admin/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="{{ asset('admin/assets/images/users/avatar.jpg')}}'" alt="John Doe"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">Nombre y Apellido</div>
                        <div class="profile-data-title">Rol del usuario</div>
                    </div>
                    <div class="profile-controls">
                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                        <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                    </div>
                </div>
            </li>
            <li class="xn-title">Menu</li>
            <li @if(Route::Is('home')) class="active" @endif>
                <a href="{{route('home')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>
            <li @if(Route::Is('orders.index')or
                    Route::Is('orders.create')or
                    Route::Is('orders.show')or
                    Route::Is('orders.edit')) class="active" @endif>
                <a href="{{route('orders.index')}}"><span class="fa fa-list"></span> <span class="xn-text">Ordenes</span></a>
            </li>
            <li @if(Route::Is('products.index')or
                    Route::Is('products.create')or
                    Route::Is('products.show')or
                    Route::Is('products.edit')) class="active" @endif>
                <a href="{{route('products.index')}}"><span class="fa fa-product-hunt"></span> <span class="xn-text">Productos</span></a>
            </li>

            <li class="xn-openable">
                <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                <ul>
                    <li><a href="pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                    <li><a href="pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                    <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                        <ul>
                            <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                            <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                        <ul>
                            <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                            <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                            <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                        </ul>
                    </li>
                    <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                    <li><a href="pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                    <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                    <li><a href="pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                    <li><a href="pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                    <li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file"></span> Blog</a>

                        <ul>
                            <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                            <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                        <ul>
                            <li><a href="pages-login.html">App Login</a></li>
                            <li><a href="pages-login-website.html">Website Login</a></li>
                            <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                        <ul>
                            <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                            <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                            <li><a href="pages-error-500.html"> Error 500</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="xn-title">Administrador</li>

        </ul>
        <!-- END X-NAVIGATION -->
    </div>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START X-NAVIGATION VERTICAL -->
        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
            <!-- TOGGLE NAVIGATION -->
            <li class="xn-icon-button">
                <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
            </li>
            <!-- END TOGGLE NAVIGATION -->
            <!-- SEARCH -->
            <li class="xn-search">
                <form role="form">
                    <input type="text" name="search" placeholder="Search..."/>
                </form>
            </li>
            <!-- END SEARCH -->
            @can('products.index')
            <li class="nav-item
                        @if(Route::Is('products.index') or
                        Route::Is('products.create')or
                        Route::Is('products.show') or
                        Route::Is('products.edit')) active @endif">
                <a class="nav-link" href="{{route('products.index')}}"> Productos</a>
            </li>
            @endcan
            @can('orders.index')
            <li class="nav-item
                        @if(Route::Is('orders.index') or
                        Route::Is('orders.create')or
                        Route::Is('orders.show') or
                        Route::Is('orders.edit') or
                        Route::Is('orders.payment')) active @endif">
                <a class="nav-link" href="{{route('orders.index')}}"> Ordenes</a>
            </li>
            @endcan
            @can('users.index')
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}"> Usuarios</a>
            </li>
            @endcan
            @can('roles.index')
            <li class="nav-item">
                <a class="nav-link" href="{{route('roles.index')}}"> Roles</a>
            </li>
            @endcan

            <!-- SIGN OUT -->
            <li class="xn-icon-button pull-right">
                <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
            </li>
            <!-- END SIGN OUT -->
            <!-- MESSAGES -->
            <li class="xn-icon-button pull-right">
                <a href="#"><span class="fa fa-comments"></span></a>
                <div class="informer informer-danger">4</div>
                <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                        <div class="pull-right">
                            <span class="label label-danger">4 new</span>
                        </div>
                    </div>
                    <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-online"></div>
                            <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                            <span class="contacts-title">John Doe</span>
                            <p>Praesent placerat tellus id augue condimentum</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-away"></div>
                            <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                            <span class="contacts-title">Dmitry Ivaniuk</span>
                            <p>Donec risus sapien, sagittis et magna quis</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-away"></div>
                            <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                            <span class="contacts-title">Nadia Ali</span>
                            <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-offline"></div>
                            <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                            <span class="contacts-title">Darth Vader</span>
                            <p>I want my money back!</p>
                        </a>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="pages-messages.html">Show all messages</a>
                    </div>
                </div>
            </li>
            <!-- END MESSAGES -->
            <!-- TASKS -->
            <li class="xn-icon-button pull-right">
                <a href="#"><span class="fa fa-tasks"></span></a>
                <div class="informer informer-warning">3</div>
                <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
                        <div class="pull-right">
                            <span class="label label-warning">3 active</span>
                        </div>
                    </div>
                    <div class="panel-body list-group scroll" style="height: 200px;">
                        <a class="list-group-item" href="#">
                            <strong>Phasellus augue arcu, elementum</strong>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                            </div>
                            <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                        </a>
                        <a class="list-group-item" href="#">
                            <strong>Aenean ac cursus</strong>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                            </div>
                            <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                        </a>
                        <a class="list-group-item" href="#">
                            <strong>Lorem ipsum dolor</strong>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                            </div>
                            <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                        </a>
                        <a class="list-group-item" href="#">
                            <strong>Cras suscipit ac quam at tincidunt.</strong>
                            <div class="progress progress-small">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                            </div>
                            <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                        </a>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="pages-tasks.html">Show all tasks</a>
                    </div>
                </div>
            </li>
            <!-- END TASKS -->
        </ul>
        <!-- END X-NAVIGATION VERTICAL -->

        <!-- page content -->
        @if(\Session::has('flash_message'))
            @include('layouts.Store.message')
        @endif
        <!-- page content -->

        @yield('content')
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Salir del <strong>Sistema</strong> ?</div>
            <div class="mb-content">
                <p>¿Está seguro de que desea salir?</p>
                <p>Pulse <strong>No</strong> si deseea continuar el trabajando. Pulse <strong>Sí</strong> para cerrar la sesión.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="{{ route('logout') }}" class="btn btn-success btn-lg"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"> Salir</i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="{{ asset('admin/audio/alert.mp3')}}" preload="auto"></audio>
<audio id="audio-fail" src="{{ asset('admin/audio/fail.mp3')}}" preload="auto"></audio>
<!-- END PRELOADS -->
<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="{{ asset('admin/js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/jquery/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src="{{ asset('admin/js/plugins/icheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>

<script type="text/javascript" src="{{ asset('admin/js/plugins/morris/raphael-min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/morris/morris.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/rickshaw/d3.v3.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/rickshaw/rickshaw.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script type='text/javascript' src="{{ asset('admin/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/owl/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('admin/js/plugins/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="{{ asset('admin/js/settings.js')}}"></script>

<script type="text/javascript" src="{{ asset('admin/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/actions.js')}}"></script>

<script type="text/javascript" src="{{ asset('admin/js/demo_dashboard.js')}}"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>
