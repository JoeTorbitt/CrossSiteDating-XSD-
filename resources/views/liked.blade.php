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
                            <form action="{{ route('dater.unlike', $dater) }}" method="POST">
                            @csrf <!-- {{ csrf_field() }} -->   
                                <button type="submit">Remove from Likes</button>
                                </form>
                                
                                <form action="{{ route('dater.message', $dater) }}" method="POST">
                                @csrf <!-- {{ csrf_field() }} -->
                                @method('PUT')
                                <input type="hidden" name="recipient_id" value="{{ $dater->id }}">
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <input type="text" name="message" id="message" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>

                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

@endsection
