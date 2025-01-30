<!DOCTYPE html>
<html lang="en">
    <head>
        @include('portal._components.metas')
        @include('portal._components.styles')
        @yield('page-styles')
    </head>
    <body>
        <div class="wrapper">
            @include('portal._components.sidebar')
            <div class="main-panel">
                @include('portal._components.topbar')
                <div class="container">
                    <div class="page-inner">
                        @yield('breadcrumb')
                        @yield('content')
                    </div>
                </div>
                @include('portal._components.footer')
            </div>
        </div>
        @include('portal._components.scripts')
        @yield('page-scripts')
    </body>
</html>