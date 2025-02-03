<!DOCTYPE html>
<html lang="en">
    <head>
        @include('errors._components.metas') 
        @include('errors._components.styles')
    </head>
    <body>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="row justify-content-center">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
    @include('errors._components.scripts')
</html>