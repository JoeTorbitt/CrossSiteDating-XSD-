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
                <a class="navbar-brand" href="/home">
                    <img src="/images/logo.png" height="200" width="300">
                    
                </a>
                <nav>
    <a href="/startdating">Start dating</a>
    <a href="/matches">Matches</a>
    <a href="/profile">Profile</a>
    <a href="/signout">Sign Out</a>
  </nav>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        @yield('content')
        
    </main>

    <footer class="bg-light py-3">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} Dating App. All rights reserved.</p>
        </div>
    </footer>

    <script src="/js/app.js"></script>
</body>
</html>