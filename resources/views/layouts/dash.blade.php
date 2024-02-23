<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Readify') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('css/side.css') }}" rel="stylesheet">

    {{-- Navbar --}}
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-end me-3">
            <p class="m-0 me-3" style="color:rgb(100, 100, 100)">
                <a href="/profile" class="link-offset-2 link-underline link-underline-opacity-0 text-dark">
                    {{auth()->user()->name}}
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/back.jpg') }}" class="rounded-circle" style="width: 45px">
                    </div>
                </a>
            </p>
        </div>
    </nav>
    {{-- End Navbar --}}
</head>

<body>
    {{-- Sidebar --}}
    <div class="sidebar">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <img src="{{ asset('img/logo.png') }}" alt="">
            <p class="fs-3 d-flex justify-content-end fw-medium" style="margin-right: 83px">
                Readify
            </p>
        </div>
        <ul class="ms-4" style="margin-top: 5rem">
            <li class="sidebar-item active mt-3 fs-5 ">
                <a href="{{{ url('/search') }}}" class="sidebar-link" style="color: rgb(151, 151, 151);">
                    <i class="bi bi-search"></i>
                    <span class="ms-2">Cari Buku</span>
                </a>
            </li>
            <li class="sidebar-item active mt-3 fs-5 ">
                <a href="{{{ url('/pinjam') }}}" class="sidebar-link" style="color: rgb(151, 151, 151);">
                    <i class="bi bi-handbag"></i>
                    <span class="ms-2">Peminjaman</span>
                </a>
            </li>
            <li class="sidebar-item active mt-3 fs-5 ">
                <a href="{{{ url('/kembali') }}}" class="sidebar-link" style="color: rgb(151, 151, 151);">
                    <i class="bi bi-bag-check"></i>
                    <span class="ms-2">Pengembalian</span>
                </a>
            </li>
        </ul>
        <ul class="ms-5" id="logout">
            <li class="sidebar-item active fs-5 " style="margin-top: 35rem">
                <a href="{{url('logout')}}" class="sidebar-link" style="color: rgb(252, 82, 82);">
                    <i class="bi bi-box-arrow-in-left"></i>
                    <span class="ms-2">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- End Sidebar --}}
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
