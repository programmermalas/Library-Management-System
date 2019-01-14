<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Login</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/assets/css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    {{-- container --}}
    <div class="container">

        {{-- card --}}
        <div class="card card-login mx-auto mt-5">

            {{-- card-header --}}
            <div class="card-header">

                Login

            </div>
            {{-- /card-header --}}

            {{-- card-body --}}
            <div class="card-body">

                <form action="{{ route('login') }}" method="POST">

                    {{ csrf_field() }}

                    {{-- form-group --}}
                    <div class="form-group">

                        <div class="form-label-group">
                        <input name="email" type="email" id="inputEmail" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email address" required="required" autofocus="autofocus" value="{{ old('email') }}">
                        <label for="inputEmail">Email address</label>

                        {{-- errors email --}}
                        @if ($errors->has('email'))

                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>

                        @endif

                        </div>

                    </div>
                    {{-- /form-group --}}

                    {{-- form-group --}}
                    <div class="form-group">

                        {{-- form-label-group --}}
                        <div class="form-label-group">

                            <input name="password" type="password" id="inputPassword" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>

                            {{-- errors password --}}
                            @if ($errors->has('password'))

                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>

                            @endif

                        </div>
                        {{-- /form-label-group --}}

                    </div>
                    {{-- /form-group --}}

                    <button class="btn btn-primary btn-block" type="submit">Login</button>

                </form>

            </div>
            {{-- /card-body --}}

        </div>
      {{-- /card --}}

    </div>
    {{-- /container --}}

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  </body>

</html>
