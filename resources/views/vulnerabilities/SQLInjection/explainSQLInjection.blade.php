@extends('layouts.app')

@section('content')
<body> 
    <main class="container">
        @yield('content')
        <h1><u>What is SQL Injection</u></h1>
        <br>
        <p>An SQL Injection attack occurs when an SQL query is injected or inserted via the input field from the client side to the application.  This can be done by inputting a malicious payload into an input field, such as the search bar. </p>

        <p>Once inserted, the exploit is able to read sensitive data within the database, alter database data and perform administrative actions, for example, deleting users or even shutting down the database management system </p>
    </main>
   
    <script src="/js/app.js"></script>
</body>

@endsection