@extends('layouts.app')

@section('content')
<body> 
    <main class="container">
        @yield('content')
        <h1><u>How to mitigate Cross Site Scripting</u></h1>
        <br>
        <p> Methods of mitigating XSS can vary when developing a web application</p>
<p> 1. Input validation - validate user input fields to make sure that they do not contain any malicious scripts  </p>
<p> 2. Output Encoding - This prevents special characters used in user input from being interpreted as scripts. </p>
<p> 3. Content Security Policy - Use of laravels csp middleware can restrict sources of scripts</p>
    </main>
    
    <script src="/js/app.js"></script>
</body>

@endsection