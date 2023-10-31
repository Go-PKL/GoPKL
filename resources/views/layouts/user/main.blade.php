{{-- <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sisfo Go PKL</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Nunito Sans', sans-serif;
        }
    </style>
    <script>
        @if (session('error'))
            alert("{{ session('error') }}");
        @endif
    </script>

</head>

<body>

    @include('layouts.backend.navbar')

    @if (Session::has('success'))
        <div class="p-3">
            <div class="text-white rounded-md alert bg-lightgreen">
                {{ Session::get('success') }}
            </div>
        </div>
        <?php
        header('refresh: 3');
        ?>
    @endif

    @yield('content')

</body>

</html> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Go PKL</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Nunito Sans', sans-serif;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="bg-white dark:bg-gray-900">
        <!-- Page Navbar -->
        @include('layouts.user.navbar')
        
        <!-- Page Alert -->
        @if (Session::has('success'))
            <div class="p-3">
                <div class="text-white rounded-md alert bg-primary">
                    {{ Session::get('success') }}
                </div>
            </div>
            <?php
            header('refresh: 3');
            ?>
        @endif
        @if (Session::has('error'))
            <div class="p-3">
                <div class="text-white rounded-md alert bg-error">
                    {{ Session::get('error') }}
                </div>
            </div>
            <?php
            header('refresh: 3');
            ?>
        @endif

        <!-- Page Content -->
        @yield('content')

        <!-- Page Footer -->
        @include('layouts.user.footer')
    </div>
</body>

</html>
