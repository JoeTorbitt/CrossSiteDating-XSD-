<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Dating App</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/images/logo.png" height="200" width="300">
                    
                </a>
                <nav>
    <a href="/signup">Sign Up</a>
    <a href="/signin">Login</a>
    
  </nav>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        @yield('content')
        <h1>Welcome to Cross Site Dating </h1>
        <p>Welcome to Cross Site Dating, a fun and interactive dating application that teaches users about cyber security vulnerabilities. This website acts as a vulnerable web application, allowing you to exploit the vulnerabilities that have been purposefully implemented for educational purposes.</p>
        <div>
            <h2>Our vulnerabilities </h2>
            <p></p>
            <ul>
                <li>Cross-Site Scripting</li>
                <li>SQL Injection</li>
                <li>CSRF</li>
            </ul>
        </div>
    </main>

    <footer class="bg-light py-3">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} Dating App. All rights reserved.</p>
        </div>
    </footer>

    <script src="/js/app.js"></script>
</body>
</html>
