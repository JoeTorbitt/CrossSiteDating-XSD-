<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('matches');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "i am the create method";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        // Check if the user has already been matched
        if ($request->user()->matches->contains($user->id)) {
            return redirect()->back()->with('error', 'You have already matched with this user.');
        }
    
        // Create a new match
        $match = new Match;
        $match->user_id = $request->user()->id;
        $match->match_id = $user->id;
        $match->save();
    
        return redirect()->back()->with('success', 'User matched successfully.');
    }
    
        
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $name)
    {
        //return view ('match')->with('id',$id);
        return view ('match', compact('id','name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}

