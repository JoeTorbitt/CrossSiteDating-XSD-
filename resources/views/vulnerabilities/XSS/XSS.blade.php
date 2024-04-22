@extends('layouts.app')

@section('content')
<body> 
    <main class="container">
        @yield('content')
        <h1><u>Cross Site Scripting</u></h1>
        <br>
        <h2><u>What is XSS</u></h2>
        <p>XSS is a vulnerability </p>
        <a href="{{ route('explainXSS') }}">learn more</a>
        <br>

        <h2><u>How to exploit</u></h2>
        <p>This is how </p>
        <a href="{{ route('exploitXSS') }}">learn more</a>
        <br>

        <h2><u>How to mitigate</u></h2>
        <p> this is how </p>
        <a href="{{ route('mitigateXSS') }}">learn more</a>
    </main>
    
    <script src="/js/app.js"></script>
</body>

@endsection