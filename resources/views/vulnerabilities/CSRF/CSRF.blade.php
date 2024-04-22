@extends('layouts.app')

@section('content')
<body> 
    <main class="container">
        @yield('content')
        <h1><u>Cross Site Request Forgery</u></h1>
        <br>
        <h2><u>What is CSRF</u></h2>
        <p>CSRF is a vulnerability </p>
        <a href="{{ route('explainCSRF') }}">learn more</a>
        <br>

        <h2><u>How to exploit</u></h2>
        <p>This is how </p>
        <a href="{{ route('exploitCSRF') }}">learn more</a>
        <br>

        <h2><u>How to mitigate</u></h2>
        <p> this is how </p>
        <a href="{{ route('mitigateCSRF') }}">learn more</a>
    </main>
    
    <script src="/js/app.js"></script>
</body>

@endsection