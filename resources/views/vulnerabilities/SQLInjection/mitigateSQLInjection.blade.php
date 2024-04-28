@extends('layouts.app')

@section('content')
<body> 
    <main class="container">
        @yield('content')
        <h1><u>how to mitigate SQL Injection</u></h1>
        <br>
        <p>1. Input Validation - Through the use of input validation, the web application is able to ensure that user input does not contain any malicious SQL code. </p>
        <p>2. Parameterized queries - This ensures that user input is treated as data and not as an SQL query. </p>
        <p>3. Account priviliges - this ensures that if a user is able to input an SQL query, they will not be able to access it, due to their account not having correct priviliges.</p>
    </main>
    
    <script src="/js/app.js"></script>
</body>

@endsection