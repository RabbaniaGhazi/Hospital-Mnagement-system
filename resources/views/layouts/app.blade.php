<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HMS - Home')</title>
    
    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <!-- Add other CSS files as needed -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    
    @yield('styles')
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Copy your header from index.html -->
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <!-- Copy your footer from index.html -->
    </footer>

    <!-- JavaScript files -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <!-- Add other JS files as needed -->
    <script src="{{ asset('template/js/main.js') }}"></script>
    
    @yield('scripts')
</body>
</html>