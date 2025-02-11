<!DOCTYPE html>
<html lang="en">
    <head>
        @include('frontend._components.metas')
        @include('frontend._components.styles')
        @yield('page-styles')
    </head>
    <body class="index-page">
        @include('frontend._components.topbar')
        <main class="main">
            @yield('content')
        </main>
        @include('frontend._components.footer')
         <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Preloader -->
        <div id="preloader"></div>
        @include('frontend._components.scripts')
        @yield('page-scripts')
    </body>
</html>