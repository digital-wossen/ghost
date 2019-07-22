
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <script src="{{ URL::to('/') }}/js/jquery.min.js"></script>
        <script src="{{ URL::to('/') }}/js/bootstrap.min.js"></script>
        <title>{{ config('app.name','GHOST') }}</title>
    </head>
    <body>
        <div class="ScrollStyle">

                @include('inc.navbar')
                <div class="container">
                    @include('inc.messages')
                    @yield('content')
                </div>
            </div>
        </div>


        
    </body>
</html>
