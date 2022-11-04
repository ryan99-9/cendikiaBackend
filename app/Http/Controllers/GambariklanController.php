<?php

namespace App\Http\Controllers;

use App\Models\Gambariklan;
use Illuminate\Http\Request;

class GambariklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Gambariklan::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Gambariklan::create($request->all());
        return $request->file('image')->store('postimage');
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gambariklan  $gambariklan
     * @return \Illuminate\Http\Response
     */
    public function show(Gambariklan $gambariklan)
    {
        return response()->json($gambariklan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gambariklan  $gambariklan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gambariklan $gambariklan)
    {
        $gambariklan->update($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gambariklan  $gambariklan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gambariklan $gambariklan)
    {
        $gambariklan->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
