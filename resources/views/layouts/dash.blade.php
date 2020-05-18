<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }} | ...</title>

  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href='{{ asset("lte3/plugins/fontawesome-free/css/all.min.css") }}'>



  @yield('css')




  <!-- Theme style -->
  <link rel="stylesheet" href='{{ asset("lte3/dist/css/adminlte.min.css") }}'>




  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  @yield('jsBeforeBody')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">...</span>
          <ul>
            <li>{{ Auth::user()->email }}</li>
          </ul>
          <div class="dropdown-divider"></div>
        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <i class="fas fa-power-off mr-2"></i> Se déconnecter
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

          <a href="#" class="dropdown-item dropdown-footer">...</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Utilisateurs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>voire les utilisateurs</p>
                  </a>
                </li>
              <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ajouter des utilisateurs</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Roles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('roles.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>voire</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('servicies.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>voire</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Specilité
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('spec.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>voire</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Guardes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('guardies.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>voire</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('guardies.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>créé</p>
                  </a>
                </li>

            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Plages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('plages.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>voire</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('plages.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Crée</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
          <a href="{{ route('log-viewer::dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logs

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('histories.index') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Histories
  
                </p>
              </a>
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
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">


        @yield('content')


      </div><!-- /.container-fluid -->
    </div>
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
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
{{--
  '{{ asset(
    ) }}'
  --}}
<!-- jQuery -->
<script src='{{ asset("lte3/plugins/jquery/jquery.min.js") }}'></script>
<!-- Bootstrap 4 -->
<script src='{{ asset("lte3/plugins/bootstrap/js/bootstrap.bundle.min.js") }}'></script>



<!-- jQuery UI -->
<script src='{{ asset("lte3/plugins/jquery-ui/jquery-ui.min.js") }}'></script>






<!-- AdminLTE App -->
<script src='{{ asset("lte3/dist/js/adminlte.min.js") }}'></script>











@yield('js')



</body>
</html>
