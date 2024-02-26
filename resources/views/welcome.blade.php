<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Readify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid mt-3">
            <a class="navbar-brand text-light" href="#">
                <h3 class="fw-medium fs-3">
                    Readify
                </h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="d-flex me-4">
                    </div>
                    <div class="d-flex align-items-center">
                        <div>
                            @if (Route::has('login'))
                                <a id="btn-login" class="nav-link active fw-semibold bg-white px-4 py-1 rounded-5"
                                    type="button" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid paragraph-gap">
        <div class="d-flex">
            <div class="p-2 flex-grow-1">
                <div class="header">
                    <h4>
                        <p class="text-start">
                            Haii, Selamat Datang
                        </p>
                    </h4>
                    <br>
                    <h1>
                        <p class="text-start fs-1">
                            Temukan dan baca
                        </p>
                        <p class="text-start fs-1">
                            bukumu disini !
                        </p>
                    </h1>
                    <br>
                    <p class="text-start fs-6">
                        Mau ke Perpus tapi mager ? Readify-in aja !
                    </p>
                </div>
            </div>
            <div class="p-3">
                <img src="{{ asset('img/logo.png') }}" alt="image">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
