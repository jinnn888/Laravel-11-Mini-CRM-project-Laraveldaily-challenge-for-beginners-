<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    {{-- Core UI --}}
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-u3h5SFn5baVOWbh8UkOrAaLXttgSF0vXI15ODtCSxl0v/VKivnCN6iHCcvlyTL7L" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css') }}">
    <link href="{{ asset('vendors/@coreui/icons/css/free.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- <link rel="stylesheet" type="text/css" href="{{ }}"> --}}

</head>

<body class="font-sans antialiased">
    
        @include("layouts.sidebar")
        <div class="wrapper">
            @include("layouts.coreui-navigation")
            {{-- <header class="header">
                <a class="header-brand" href="#">
                    <img src="/assets/brand/coreui-signet.svg" alt="" width="22" height="24" alt="CoreUI Logo">
                </a>
            </header> --}}
            <div class="body flex-grow-1">
                <div class="container-lg px-4">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </div>

    @stack('scripts')


    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/js/coreui.bundle.min.js" integrity="sha384-JdRP5GRWP6APhoVS1OM/pOKMWe7q9q8hpl+J2nhCfVJKoS+yzGtELC5REIYKrymn" crossorigin="anonymous"></script>
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src=" {{ asset('vendors/simplebar/js/simplebar.min.js') }}"></script>
</body>

</html>
