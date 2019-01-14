<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | @yield('title')</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">

    @include('layouts.menus._navbar')

    {{-- .wrapper --}}
    <div id="wrapper">
        
      @include('layouts.menus._sidebar')

      {{-- #content-wrapper --}}
      <div id="content-wrapper">

        {{-- .container-fluid --}}
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">

            <li class="breadcrumb-item">

                <a href="{{ route('dashboard') }}">Dashboard</a>

            </li>

            @yield('breadcrumb-item')
            
          </ol>
          {{-- /Breadcrumbs --}}

          @include('layouts.partials._alerts')
          
          @yield('content')

        </div>
        <!-- /.container-fluid -->

        @include('layouts._footer')

      </div>
      <!-- /.content-wrapper -->
      
    </div>
    <!-- /#wrapper -->

    @include('layouts.components._scroll')
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin.min.js') }}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>

  </body>

</html>
