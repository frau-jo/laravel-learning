<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel Site')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts: Montserrat and Didot -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Didot';
            src: local('Didot'), local('Didot LT STD'),
                 url('https://fonts.cdnfonts.com/s/14206/Didot-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --bs-dark-pink: #871649;
            --bs-main-pink: #f778b1;
            --bs-light-pink: #f3e3ee;
            --bs-light-gray: #f5f5f5;
            --bs-bright-pink: #fb64c1;
            --bs-bright-blue: #46b5fa;
            --bs-bright-green: #81d962;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--bs-light-gray);
            color: var(--bs-dark-pink);
            padding-top: 4rem;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Didot', serif;
            color: var(--bs-main-pink);
        }

        .container {
            background: white;
            border-radius: 1rem;
            padding: 1rem;
            width: 100%;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 10px rgba(135, 22, 73, 0.1);
        }

        /* Apply tighter width and center alignment on small screens */
        @media (max-width: 575.98px) {
            .container {
                width: 95%;
            }
        }

        /* Larger devices: constrain width and center */
        @media (min-width: 576px) {
            .container {
                padding: 2rem;
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }




        .nav-pink {
            background-color: var(--bs-main-pink);
        }

        .nav-pink a {
            color: white !important;
            font-weight: 600;
        }

        .nav-pink a:hover {
            color: var(--bs-light-pink) !important;
        }

        .breadcrumb-container {
            margin: 1rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg nav-pink fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="/">Jo's Laravel Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="/projects" class="nav-link">Projects</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Breadcrumbs Section -->
    <div class="breadcrumb-container">
        @yield('breadcrumbs')
    </div>

    <div class="container mt-3 ">
        @yield('content')
    </div>

    <!-- Bootstrap JS (for navbar toggler) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
