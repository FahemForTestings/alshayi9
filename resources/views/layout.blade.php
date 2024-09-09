<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="description" content="The Best Store Ever!">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/custom.css'])

    @yield('head')
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Alshayi9</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/orders">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products/create">+ New Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">0669 18 46 77</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    
    @yield('content')

    <footer class="py-3 mt-4 bg-dark">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">About</a></li>
        </ul>
        <p class="text-center text-light">© 2024 Company, Inc</p>
    </footer>
</body>

</html>
