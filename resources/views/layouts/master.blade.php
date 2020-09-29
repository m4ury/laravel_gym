<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gym') }}</title>

    <!-- Scripts -->
    @if(env('APP_ENV') == 'local')
        <script src="{{ asset('js/app.js') }}"></script>
    @else
        <script src="{{ secure_asset('js/app.js') }}"></script>
        @endif

        <!-- Styles -->
            @if(env('APP_ENV') == 'local')
                <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            @else
                <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        @endif

        <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
            </head>

<body class="hold-transition sidebar-mini sidebar-collapse">
<div id="app" class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark bg-green">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-home mr-2"></i>Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('pacientes.index') }}" class="nav-link"><i
                        class="fas fa-user-friends mr-2"></i>Pacientes</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('alimentos.index') }}" class="nav-link"><i
                        class="fas fa-apple-alt mr-2"></i>Alimentos</a>
            </li>
            {{--<li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('presupuesto.index') }}" class="nav-link"><i
                        class="fas fa-clipboard mr-2"></i>Presupuesto</a>
            </li>--}}
            {{-- <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('abono.index') }}" class="nav-link"><i
                        class="fas fa-hand-holding-usd mr-2"></i>Abonos</a>
            </li>--}}
        </ul>

        <!-- SEARCH FORM -->
        {!! Form::open(['route' => 'pacientes.index', 'method' => 'GET', 'class' => 'form-inline ml-3']) !!}
        <div class="input-group input-group-sm">
            {{ Form::search('q', null, ['class' => 'form-control form-control-navbar', 'placeholder' => 'Buscar por rut, nombre...', 'aria-label' => 'Search'], isset($q) ? $q : '') }}
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    {!! Form::close() !!}

    <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a class="brand-link" href="{{ url('/') }}">
            @if(env('APP_ENV') == 'local')
                <img src="{{ asset('images/gym_logo.png') }}" @else <img
                src="{{ secure_asset('images/gym_logo.png') }}" @endif alt="licanDent Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
        </a>


        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-heartbeat"></i>
                            <p>
                                MENU
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('pacientes.index') }}" class="nav-link active">
                                    <i class="fas fa-user-friends mr-2"></i>
                                    <p>Pacientes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('alimentos.index') }}" class="nav-link active">
                                    <i class="fas fa-apple-alt mr-2">
                                    </i>
                                    <p>Alimentos</p>
                                </a>
                            </li>
                            {{--<li class="nav-item">
                                <a href="{{ route('presupuesto.index') }}" class="nav-link active">
                                    <i class="fas fa-calculator nav-icon"></i>
                                    <p>Mis Presupuestos</p>
                                </a>
                            </li>--}}
                        </ul>
                    </li>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-dumbbell"></i>
                                <p>
                                    EXAMEN FISICO
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('antropometrias.index') }}" class="nav-link active">
                                        <i class="fas fa-weight"></i>
                                        <p>Antropometrias</p>
                                    </a>
                                </li>
                                {{--<li class="nav-item">
                                    <a href="{{ route('abono.index') }}" class="nav-link active">
                                        <i class="fas fa-hand-holding-usd"></i>
                                        <p>Abonos</p>
                                    </a>
                                </li>--}}
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-utensils"></i>
                                <p>
                                    DIETA
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    {{--<a href="{{ route('medio.index') }}" class="nav-link active">
                                        <i class="fas fa-money-check-alt"></i>
                                        <p>Medios de Pago</p>
                                    </a>--}}
                                </li>
                                {{--<li class="nav-item">
                                    <a href="{{ route('abono.index') }}" class="nav-link active">
                                        <i class="fas fa-hand-holding-usd"></i>
                                        <p>Abonos</p>
                                    </a>
                                </li>--}}
                            </ul>
                        </li>

                    </ul>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i
                                class="fas fa-sign-out-alt nav-icon"></i>
                            <p>{{ __('Logout') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">
                            {{ Str::ucfirst(Str::replaceFirst('.', ' ', Route::currentRouteName())) }}</h1>
                    </div><!-- /.col -->
                {{--<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Starter Page</li>
</ol>
</div>--}}
                <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
    @yield('content')
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            <strong><i class="fab fa-laravel"></i> Made with Laravel </strong>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{ now()->year }} <a target="_blank" href="https://github.com/m4ury"
                                                      style="text-decoration:none">
                <i class="fab fa-github"></i> Mauricio Morales</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
</body>
@yield('scripts')
<script>
    $('.sidebar-mini').addClass("sidebar-collapse");
    $(document).ready(function () {
    $('#alert').delay(2000).slideUp(200, function () {
    $(this).remove();
    });
    }, 5000);
</script>
</html>
