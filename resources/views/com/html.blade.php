<html>
<head>
 <meta name="csrf-token" content="{{ Session::token() }}">
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   {{ Html::style('assets/css/font-awesome.min.css') }}
   {{ Html::style('assets/css/bootstrap.min.css') }}
   {{ Html::style('assets/dist/css/dashboard.min.css') }}
   {{ Html::style('assets/dist/css/skins/_all-skins.min.css') }}
   {{ Html::script('assets/js/jquery.min.js') }}
   {{ Html::script('assets/js/jquery-ui.js') }}
   {{ Html::script('assets/js/bootstrap.min.js') }}
   {{ Html::style('assets/css/ionicons.min.css') }}
   {{ Html::style('assets/css/jquery-ui.css') }}
   {{ Html::style('assets/css/style.css') }}
	<title>Financial System | @yield('title')</title>
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <a href="{{URL('/')}}/com" class="logo">
          <span class="logo-mini"><b>FS</b></span>
          <span class="logo-lg"><b>7Sala</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu" style="float: left;">
          <ol class="breadcrumb" style="margin: 7px 0">
            <li><a href="{{URL('/')}}/com"><i class="fa fa-home"></i></a></li>
                 @yield('breadcrumb')
            <li class="active">{{ $title }}</li>
          </ol>
          </div>
          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

              <li class="dropdown user user-menu">
                <a href="{{URL::to('refresh')}}">
                <i class="fa fa-refresh"></i>
                </a>
              </li>

              <li class="dropdown user user-menu">
                <a href="{{URL::to('profile')}}">
                <i class="fa fa-user"></i>
                 Profile
                </a>
              </li>

              <li class="dropdown user user-menu">
                <a href="{{URL::to('logout')}}">
                <i class="fa fa-sign-out"></i>  Welcome! {{ ucfirst(Auth::user()->username) }}

                </a>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif

        @if(Session::has('message'))
          <div class="alert alert-info">
            {{Session::get('message')}}
          </div>
        @endif

            @yield('content')
      </div><!-- /.content-wrapper -->
  

    </div><!-- ./wrapper -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{URL('/')}}/assets/dist/js/app.min.js"></script>
    <script src="{{URL('/')}}/assets/dist/js/demo.js"></script>
  </body>
</html>
