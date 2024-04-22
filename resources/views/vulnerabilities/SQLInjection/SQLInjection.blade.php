@extends('layouts.app')

@section('content')
<body> 
    <main class="container">
        @yield('content')
        <h1><u>SQL Injection</u></h1>
        <br>
        <h2><u>What is an SQLInjection</u></h2>
        <p>SQLi is a vulnerability </p>
        <a href="{{ route('explainSQLInjection') }}">learn more</a>
        <br>

        <h2><u>How to exploit</u></h2>
        <p>This is how </p>
        <a href="{{ route('exploitSQLInjection') }}">learn more</a>
        <br>

        <h2><u>How to mitigate</u></h2>
        <p> this is how </p>
        <a href="{{ route('mitigateSQLInjection') }}">learn more</a>
    </main>
    
    <script src="/js/app.js"></script>
</body>

@endsection