@if(Route::currentRouteName()=='index')
<div class="p-2 bg-blue-100">
@else
<div class="p-8 max-w-x1 bg-blue-100">
@endif
    <div class="bg-white p-1 rounded-lg shadow-lg">
        <h3 class="text-blue-700 mb-4 text-lg font-bold">{{$dater['name']}}</h3>
        <h3 class="font-bold mb-2 text-gray-800">{{$dater['bio']}}</h2>
        <div class="flex justify-between">
            <p class="text-gray-700">{{$dater['age']}}</p>
            @if(Route::currentRouteName()=='daters.index')
                <button value="{{$dater['id']}}" class="bg-blue-500 hover:bg-blue-700 text-white font:bold py-2 px-4 rounded-full select-dater">View</button>
               @elseif(Route::currentRouteName()=='daters.show')
               
               <button value="{{$daters['id']}}" class="bg-blue-500 hover:bg-blue-700 text-white font:bold py-2 px-4 rounded-full match-dater">match</button>

               @endif
        
        
        </div>
    
    
    </div>
</div>
</div>               