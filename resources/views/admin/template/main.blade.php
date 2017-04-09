<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Default') | CRUD Laravel 5</title>
        <link rel="stylesheet" href="{{ asset('libraries/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('libraries/datepicker/css/bootstrap-datepicker.css') }}">
    </head>
    <body>
        <div class="container">
            @include('admin.template.partials.nav')
            <section>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>@yield('title')</strong>
                    </div>
                    <div class="panel-body">
                        @include('flash::message')
                        @include('admin.template.partials.errors')
                        @yield('content')
                    </div>
                </div>
            </section>    
            @include('admin.template.partials.footer')    
        </div>
        <!-- libreria jquery -->
        <script src="{{ asset('libraries/jquery/js/jquery.js') }}"></script>
        <!-- libreria bootstrap -->
        <script src="{{ asset('libraries/bootstrap/js/bootstrap.js') }}"></script>
        <!-- libreria bootstrap datepicker -->
        <script src="{{ asset('libraries/datepicker/js/bootstrap-datepicker.js') }}"></script>
        
        
        @yield('js')

    </body>
</html>