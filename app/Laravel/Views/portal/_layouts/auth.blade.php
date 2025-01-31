<!DOCTYPE html>
<html lang="en">
    <head>
        @include('portal._components.metas')
        @include('portal._components.styles')
        @yield('page-styles')
    </head>
    <body class="login">
        <div class="wrapper wrapper-login">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('assets/portal/img/delivery_logo.png')}}" class="img-fluid mx-auto d-block" width="160" alt="logo">
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>