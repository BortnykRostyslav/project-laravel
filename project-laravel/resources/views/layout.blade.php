<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom navbar-dark bg-dark">
    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <span class="fst-italic navbar-brand">Project Laravel</span>
    </a>

    <nav class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <a class="nav-link px-3" href="/">Home</a>
        <a class="nav-link px-3" href="/about">About</a>
        <a class="btn btn-outline-primary me-2" href="/review">Review</a>
    </nav>

    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href='/user/profile' class="btn btn-primary">Profile</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                @endif
            @endauth
        </div>
    @endif

</header>
<div class="container">
    @yield('main_content')
</div>
</body>
</html>
