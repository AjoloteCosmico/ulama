<x-laravel-ui-adminlte::adminlte-layout>
<head>
<link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-sierra.jfif') }}">
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <style>
        th{
            background-color: {{ Auth::user()->color }};
            color: white;
        }
        .content-wrapper {
   
   background: url("{{asset('img/Fondo4.jpg')}}") 50% 0 no-repeat fixed;
    background-size: cover;
    font-weight: bold;
  size: 60px;
  color: #cdc8d8;
}
.wrapper {
   
   background: #343A40;
    
}
     </style>
      <!-- Bootstrap 5.0 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- Font Awesome 6 Kit LEPER SYSTEMS -->
        <script src="https://kit.fontawesome.com/1bfa36884d.js" crossorigin="anonymous"></script>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Load Source Sans Pro font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
        <!-- Load Nunito font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Load Roboto font -->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext" rel="stylesheet">
        <!-- Load Amaranth font -->
        <link href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- DataTables -->
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/af-2.3.7/b-1.7.1/b-print-1.7.1/cr-1.5.4/date-1.1.0/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.css"/>

        <!-- Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('vendor/img/ico/apple-touch-icon-144.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('vendor/img/ico/apple-touch-icon-114.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('vendor/img/ico/apple-touch-icon-72.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('vendor/img/ico/apple-touch-icon-57.png') }}">
        <link rel="shortcut icon" href="{{ asset('vendor/img/ico/favicon.ico') }}">

     @stack('css')
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <body class="hold-transition sidebar-mini layout-fixed"  >
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background:#343A40; color:white;">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars" style="color:white"></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('img/logo-sierra.jfif')}}"
                                class="user-image img-circle elevation-2" alt="User Image">
                            <span class="d-none d-md-inline" style="color:white;"> 
                                <!-- aki iba el nombre de usuario pero lo quite  -->
                                {{ Auth::user()->name }}

                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header ">
                                <img src="{{asset('img/logo-sierra.jfif')}}"
                                    class="img-circle elevation-2" alt="User Image">
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" class="btn btn-default btn-flat float-right"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer" style="background:#343A40">
                <div class="float-right d-none d-sm-block" >
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2022-2023 <a href="https://www.facebook.com/ullamaUNAM/">ULAMA SIERRA TONANTZIN TLALLI</a>.</strong> All rights
                reserved.
            </footer>
        </div>

        
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  

        @stack('js')
    </body>
</x-laravel-ui-adminlte::adminlte-layout>

