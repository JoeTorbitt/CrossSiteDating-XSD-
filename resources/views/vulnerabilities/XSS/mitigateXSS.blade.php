@extends('layouts.app')

@section('content')
<body> 
    <main class="container">
        @yield('content')
        <h1><u>How to mitigate Cross Site Scripting</u></h1>
        <br>
        <p> Methods of mitigating XSS can vary.....</p>
    </main>
    
    <script src="/js/app.js"></script>
</body>

@endsection