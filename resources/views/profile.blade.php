@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <h1>Profile</h1>
    <p>Name: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
    <p>Created At: {{ Auth::user()->created_at }}</p>
</div>

</body>
@endsection