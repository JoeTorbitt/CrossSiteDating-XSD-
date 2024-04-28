@extends('layouts.app')

@section('content')
<body>
<link rel="stylesheet" href="{{ ('style.css') }}">
<div class="container dater-container">
        <h1>Your Likes</h1>
        <div class="row">
            @foreach ($daters as $dater)
                <div class="col-md-4">
                    <div class="dater-card">
                    <img src="{{ asset('storage/images/'.$dater->image)}}" alt="{{ $dater->name }}">
                        <div class="card-body">
                            <h5>{{ $dater->name }}</h5>
                            <p>Age: {{ $dater->age }}</p>
                            <p>Bio: {{ $dater->bio }}</p>
                                <br>
                                <form action="{{ route('dater.message', $dater) }}" method="POST">
                                @csrf <!-- {{ csrf_field() }} -->
                                @method('PUT')
                                <input type="hidden" name="recipient_id" value="{{ $dater->id }}">
                                <div class="form-group">
                                    <label for="message">Message {{ $dater->name }}:</label>
                                    <textarea name="message" id="message" rows="2" cols="20"></textarea>
                                </div>
                                <button class="message-button">Send message</button>
                            </form>
<br>                        
                            <form method="PUT" action="{{ route('execute.query') }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                            <label for="query">Enter a SQL query:</label>
                            <textarea name="query" id="query" rows="2" cols="20"></textarea>
                            <button class="execute-query-button">Execute Query</button>
                            </form>
                            <br>
                        </div>
                        <br>

                        <form method="POST" action="/xss">
                        @csrf
                        <label for="script">Enter XSS script:</label>
                        <textarea name="script" id="script" cols="20" rows="2"></textarea>
                        
                        <button class="execute-script-button">Send Script</button>
                    </form>
                    <br>
                    <br>
                    <br>
                    <form action="{{ route('dater.unlike', $dater) }}" method="POST">
                            @csrf <!-- {{ csrf_field() }} -->   
                                <button class="dislike-button">remove from Likes</button>
                                </form>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

@endsection
