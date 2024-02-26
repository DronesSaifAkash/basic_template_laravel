<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add your additional stylesheets, scripts, etc. here -->
    <link rel="stylesheet" href="{{ asset('assets/css/frontend/style.css') }}">
</head>
<body>

    <header class="bg-dark text-white">
        <!-- Your header content goes here -->
        <div class="container">
            <h1>Header Content</h1>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <!-- Your sidebar content goes here -->
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Sidebar link 1 
                                <!-- Sidebar link 1 -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Sidebar link 2
                                <!-- Sidebar link 2 -->
                            </a>
                        </li>
                        <!-- Add more sidebar links as needed -->
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>

        </div>
    </div>

    <footer class="bg-dark text-white">
        <!-- Your footer content goes here -->
        <div class="container">
            <p>Footer Content</p>
        </div>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add your additional scripts here -->

</body>
</html>
