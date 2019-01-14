<!doctype html>
<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/index.css') }}">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <title>@yield('title-page')</title>

  </head>

  <body>
     
    {{-- header --}}
    <header>

        @include('layouts.default.menus._subnavbartop')

        @include('layouts.default.menus._navbartop')

        {{-- jumbotron --}}
        <div class="jumbotron jumbotron-fluid">

            {{-- container --}}
            <div class="container">

                <h1 class="display-4">Library Management System</h1>
                <p class="lead">quem quae amet export nulla eram anim malis export aliqua labore duis velit nisi
                    elit quid illum quem fore velit dolor malis sint eram nisi</p>
                <hr class="my-4">
                <p>elit eram quid summis malis illum aute amet ipsum aliqua</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>

            </div>
            {{-- /container --}}

        </div>
        {{-- /jumbotron --}}

    </header>
    {{-- /header --}}

    {{-- main --}}
    <main>

        {{-- container --}}
        <div class="container">

            @yield('welcome')

        </div>
        {{-- /container --}}

        @include('layouts.default.components._card')

    </main>
    {{-- /main --}}

    @include('layouts.default._footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>

</html>
