<!-- Stored in resources/views/layouts/master.blade.php -->


<html lang="">
    <head>

        <title>App Name - @yield('titolPagina')</title>
    </head>
    <body>
        
        <div class="header">
            @yield('header')
        </div>

         <div class="content">
            @yield('content')
        </div>

         <div class="footer">
            @yield('footer')
        </div>


    </body>
</html>

