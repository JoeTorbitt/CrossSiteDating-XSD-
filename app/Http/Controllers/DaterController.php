<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDaterRequest;
use App\Models\Dater;
use Illuminate\Support\Facades\DB;

class DaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daters = Dater::all();
        return view('daters', ['daters' => $daters]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDaterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDaterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dater  $dater
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $dater = Dater::find($id);
        return view ('dater', ['dater' => $dater]);
    }

    public function like(Dater $dater)
{
    
    // Update the 'liked' column for the specified dater
    $user = auth()->user();
    $dater->update(['liked' => true]);
    return redirect()->route('dater.liked');
}



public function liked()
{
    // Retrieve the daters that the user has liked
    $daters = Dater::where('liked', true)->get();
    return view('liked', compact('daters'));
    
}

public function unlike(Dater $dater)
{
   
    // Update the 'liked' column for the specified dater
    $user = auth()->user();
    $dater->update(['liked' => false]);
    return redirect()->route('dater.liked');
}


    
//}

//sends the message 
public function message(Request $request, Dater $dater)
    {
        $message = $request->input('message');

        $dater->update(['messages' => $message]);

        return redirect()->route('dater.allmessages', $dater->id);

    }
    

//displays all messages sent
public function messages(Dater $dater)
{
  
    $daters = Dater::where('id', '!=', $dater->id)
        ->where('liked', true)
        ->where('messages', '!=', '')
        ->get();

    return view('messages', compact('daters', 'dater'));
}

    //deletes the message
public function unmessage(Dater $dater)
{
    $dater->update(['messages' => '']);
    return redirect()->route('dater.allmessages', $dater->id);

}
public function executeQuery(Request $request)
{
$query = $request->input('query');

    if (!empty($query)) {
        DB::statement($query);
    }

        return redirect()->route('dater.allmessages');

    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dater  $dater
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDaterRequest  $request
     * @param  \App\Models\Dater  $dater
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dater  $dater
     * @return \Illuminate\Http\Response
     */
    
}