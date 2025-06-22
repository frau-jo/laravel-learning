<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel Site')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">

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

        .container {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(135, 22, 73, 0.1);
        }

        h1 {
            color: var(--bs-main-pink);
            font-weight: 800;
        }

        p, li {
            font-size: 1.1rem;
        }

        .nav-pink {
            background-color: var(--bs-main-pink);
        }

        .nav-pink a {
            color: white !important;
            font-weight: 600;
            margin-right: 1rem;
        }

        .nav-pink a:hover {
            color: var(--bs-light-pink) !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg nav-pink fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="/">Jo's Site</a>
            <div>
                <a href="/about" class="nav-link d-inline">About</a>
                <a href="/contact" class="nav-link d-inline">Contact</a>
                <a href="/project" class="nav-link d-inline">Projects</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>
