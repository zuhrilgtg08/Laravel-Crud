<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (isset($title))
    <title>{{ config('app.short_name', 'Argon Dashboard') }} | {{$title}}</title>
    @else
    <title>{{ config('app.short_name', 'Argon Dashboard') }}</title>
    @endif
    <!-- Favicon -->
    <link href="{{ asset('/templateargon/argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->

    <!-- Icons -->
    <link href="{{ asset('templateargon/argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('templateargon/argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('templateargon/argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <link type="text/css" href="{{ asset('templateargon/argon') }}/css/custom.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
</head>

<body class="{{ $class ?? '' }}">
    @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @include('layouts.navbars.sidebar')
    @endauth

    <div class="main-content">
        @auth
        @include('layouts.navbars.navbar')
        @endauth
        @yield('content')
    </div>

    @guest()
    {{-- @include('layouts.footers.guest') --}}
    @endguest

    <script src="{{ asset('templateargon/argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('templateargon/argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    @stack('js')

    <!-- Argon JS -->
    <script src="{{ asset('templateargon/argon') }}/js/argon.js?v=1.0.0"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
    <script>
        $(document).ready( function () {
                $('#table_id').DataTable();
            } );
    </script>
</body>

</html>