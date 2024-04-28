@extends('layouts.app')

@section('content')
<body>
    <h1>Invalid script</h1>
    <p>The script you entered is invalid. Please go back and try again.</p>

    <a href="{{ url()->previous() }}">Go back</a>
    <br>
    <p>Or view our documentation on XSS vulnerabilities for any extra information </p>
    <a href="/XSS"> XSS Documentation</a>
</body>
</html>

@endsection