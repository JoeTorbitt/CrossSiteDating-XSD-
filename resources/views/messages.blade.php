@extends('layouts.app')

@section('content')

<body>
<link rel="stylesheet" href="{{ ('style.css') }}">
<div class="container dater-container">
        <h1>Messages Sent</h1>
        <div class="row">
            @foreach ($daters as $dater)
                <div class="col-md-4">
                    <div class="dater-card">
                    <img src="{{ asset('storage/images/'.$dater->image)}}" alt="{{ $dater->name }}">
                        <div class="card-body">
                            <h5>{{ $dater->name }}</h5>
                            <p>Age: {{ $dater->age }}</p>
                            <p>Bio: {{ $dater->bio }}</p>
                            <p>Messages: {{ $dater->messages }}</p>
                            <form action="{{ route('dater.unmessage', $dater->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="dislike-button">Delete Message</button>
                                
                            </form>
                        </div>
                    </div>

                            @endforeach

   


        </div>
    </div>
</body>

@endsection
