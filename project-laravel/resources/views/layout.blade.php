<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <span class="fs-4">Project Laravel</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/">Home</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/about">About</a>
    </nav>
    <a class="btn btn-warning" href="/review">Review</a>
</div>
<div class="container">
    @yield('main_content')
</div>
</body>
</html>