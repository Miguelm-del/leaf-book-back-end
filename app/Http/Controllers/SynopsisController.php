<?php

namespace App\Http\Controllers;

use App\Models\Synopsis;
use Illuminate\Http\Request;

class SynopsisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $synopses = Synopsis::all();
        return response($synopses, 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Synopsis::create($request->all());
        return response()->json(["result" => "ok"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Synopsis  $synopsis
     * @return \Illuminate\Http\Response
     */
    public function show(Synopsis $synopsis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Synopsis  $synopsis
     * @return \Illuminate\Http\Response
     */
    public function edit(Synopsis $synopsis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Synopsis  $synopsis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Synopsis $synopsis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Synopsis  $synopsis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Synopsis $synopsis)
    {
        //
    }
}
