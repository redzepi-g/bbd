<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

        <!-- fontawesome -->
        <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}" />

        <!-- custom styles -->
        @yield('customstyles')

        <!-- utility -->
        <link rel="stylesheet" href="{{asset('css/utility.css')}}" />

        <!-- mainstyle -->
        <link rel="stylesheet" href="{{asset('css/mainStyle.css')}}" />


    </head>
    <body>
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <h3>Hello</h3>
                </div>
            </div>
        </div>


    <!-- bootstrap required scripts -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- custom scripts -->
    @yield('customscripts')

    </body>
</html>
