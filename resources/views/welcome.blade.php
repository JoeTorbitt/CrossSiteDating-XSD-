@extends('layouts.app')

@section('content')

<body>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                    
                </div>
            @endif
<link rel="stylesheet" href="{{ ('style.css') }}">
    <main class="container">
    <h1>Welcome to Cross Site Dating </h1>
        <p>Welcome to Cross Site Dating, a fun and interactive dating application that teaches users about cyber security vulnerabilities. This website acts as a vulnerable web application, allowing you to exploit the vulnerabilities that have been purposefully implemented for educational purposes.</p>
        <div>
            <br>
            <h2><u>Our vulnerabilities </u></h2>
            <br>
            <p></p>
            <ul>
                <li>-Cross-Site Scripting</li>
                <li>-SQL Injection</li>
                <li>-CSRF</li>
            </ul>
        </div>

                </main>

        
    


    <script src="/js/app.js"></script>
</body>
@endsection