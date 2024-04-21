@extends('layouts.app')

@section('content')
<body>
<link rel="stylesheet" href="{{ ('style.css') }}">
<div class="container dater-container">
        <h1>Daters</h1>
        <div class="row">
            @foreach ($daters as $dater)
                <div class="col-md-4">
                    <div class="dater-card">
                    <img src="{{ ('/images' . $dater->image) }}" alt="{{ $dater->name }}">
                        <div class="card-body">
                            <h5>{{ $dater->name }}</h5>
                            <p>Age: {{ $dater->age }}</p>
                            <p>Bio: {{ $dater->bio }}</p>
                            <button value="{{ $dater->id }}" class="select-dater btn btn-primary">Select</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
@endsection



