@extends('layouts.app')

@section('content')
<div class="p-2 m-2 rounded-lg shadow-lg bg-gray-50 border-2 border-blue-900 max-w-md">
    
    <p>{{$dater->name}}</p>
    <p>{{$dater->age}}</p>
    <p>{{$dater->bio}}</p>
    <p>{{$dater->image}}</p>
</div>
@if(Route::currentRouteName()=='home'||Route::currentRouteName()=='product.index')
            <button value="{{$dater->id}}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2  rounded-full select-dater">Select</button>
@else
       @can('purchase-product')
            <button value="{{$dater->id}}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2  rounded-full match-dater">Match</button>
       @endcan

       @endif
@endsection
    
