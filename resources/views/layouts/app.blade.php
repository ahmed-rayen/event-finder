<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Finder - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-light font-sans">
    <header class="bg-primary text-white p-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3 font-weight-bold">Event Finder</h1>
            <nav>
                <a href="/" class="text-white px-3 text-decoration-none">Home</a>
                <a href="/events" class="text-white px-3 text-decoration-none">Events</a>
            </nav>
        </div>
    </header>

    <main class="container py-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white p-4 mt-5">
        <div class="container text-center">
            <p>© {{ date('Y') }} Event Finder. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
