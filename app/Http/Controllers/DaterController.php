<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDaterRequest;
use App\Http\Requests\UpdateDaterRequest;
use App\Models\Dater;

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dater  $dater
     * @return \Illuminate\Http\Response
     */
    public function edit(Dater $dater)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDaterRequest  $request
     * @param  \App\Models\Dater  $dater
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDaterRequest $request, Dater $dater)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dater  $dater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dater $dater)
    {
        //
    }
}
