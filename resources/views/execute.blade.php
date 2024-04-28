@extends('layouts.app')

@section('content')
<body>
    <h1>XSS</h1>
    <p>If your pop up displayed, you have successfully exploited our Cross site scripting vulnerability</p>
    <br>
    <p>If the script you entered was invalid, your input will be displayed below. Please take a look at our XSS documentation page to learn more on what you could have done to exploit this vulnerability</p>
    <br>
        {!! $xssInput !!}
    
</body>
</html>

@endsection