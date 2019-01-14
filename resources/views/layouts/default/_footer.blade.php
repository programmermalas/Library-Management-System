{{-- footer --}}
<footer class="footer" style="margin-top:10px;">

    {{-- navbar --}}
    <nav class="navbar navbar-light bg-light" style="padding-top:50px;padding-bottom:50px;">

        {{-- container --}}
        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-4 col-lg-4">

                    <h6>@yield('title-about-us')</h6>

                    <hr>

                    <p>@yield('content-about-us')</p>
                    
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">

                    <h6>Quick Links</h6>

                    <hr>

                    @include('layouts.default.menus._navbarbottom')

                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">

                    <h6>Join Our Newsletter!</h6>

                    <hr>

                    <p>anim nisi magna noster tamen legam tempor esse fugiat nisi</p>

                    <form action="#">

                        {{-- form-group --}}
                        <div class="form-group">

                            <form action="#" method="post">

                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                                <br>

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>

                        </div>
                        {{-- /form-group --}}

                    </form>

                </div>

            </div>

        </div>
        {{-- /container --}}

    </nav>
    {{-- /navbar --}}

    @include('layouts.default.menus._subnavbarbottom')

</footer>
{{-- /footer --}}