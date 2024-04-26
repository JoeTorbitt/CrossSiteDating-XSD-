@extends('layouts.app')

@section('content')

<body> 
    <main class="container">
        @yield('content')
        <p>Thank you for creating an account with Cross-Site dating</P>
        <br>
        <p>Our application seeks to provide you with an educational experience on common vulnerabilities in web applications.</P>
        <br>
        <p>Use the navbar above to direct yourself to the start dating page, where you will be able to start liking users. Or you could take yourself to one of the vulnerability pages which provide information on our vulnerabilities, such as how to exploit them and how to mitigate such vulnerabilities for future reference </P>
    </main>
    
    <script src="/js/app.js"></script>
</body>

@endsection
