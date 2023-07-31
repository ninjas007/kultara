<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KulTura</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Start MDBootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <!-- End MDBootstrap -->

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    @yield('css')
</head>

<body>
    <div id="wrapper">
        <div class="body-wrap mb-3">
            <div class="body">
                <div class="body-header">
                    <div class="body-header-content">
                        @yield('title')
                    </div>
                </div>
                
                @yield('content')
            </div>
        </div>
        
        @include('layouts.menu-footer')
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/script.js') }}"></script>

    @yield('js')
</body>

</html>
