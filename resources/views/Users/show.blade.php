@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>

                    <div class="card-body">
                        <img src="{{ $user->photo }}" alt="{{ $user->name }}" class="img-fluid mb-3">

                        <p><strong>Age:</strong> {{ $user->age }}</p>
                        <p><strong>Location:</strong> {{ $user->location }}</p>
                        <p><strong>Bio:</strong> {{ $user->bio }}</p>

                        <a href="{{ route('matches.store', $user->id) }}" class="btn btn-primary">Match</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




