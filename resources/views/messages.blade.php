@extends('layouts.app')

@section('content')
<body>
<link rel="stylesheet" href="{{ ('style.css') }}">
<div class="container dater-container">
<h1>{{ $dater->name }}</h1>

<form action="{{ route('messages.store') }}" method="POST">
    @csrf
    <input type="hidden" name="to_user_id" value="{{ $dater->id }}">
    <textarea name="message" id="message" rows="4" cols="50"></textarea>
    <button type="submit">Send Message</button>
</form>
</body
@endsection