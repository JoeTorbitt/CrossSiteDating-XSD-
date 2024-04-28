@extends('layouts.app')

@section('content')
<body> 
    <main class="container">
        @yield('content')
        <h1><u>What is Cross Site Scripting</u></h1>
        <br>
        <p> Cross Site Scripting (XSS) – Cross site scripting is a security vulnerability often found in web applications. An XSS attack occurs when a malicious script is injected into web pages that are viewed by other users. The malicious script is executed in the victims browser, allowing the perpetrator to gain access to sensitive information and session tokens stored in a user’s cookies. A website may be susceptible to Cross Site Scripting attacks through insufficient input validation by web applications  </p>
    </main>
    
</body>

@endsection