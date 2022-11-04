<?php

namespace App\Http\Controllers;

use App\Models\Teksiklan;
use Illuminate\Http\Request;

class TeksiklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Teksiklan::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Teksiklan::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teksiklan  $Teksiklan
     * @return \Illuminate\Http\Response
     */
    public function show(Teksiklan $Teksiklan)
    {
        return response()->json($Teksiklan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teksiklan  $Teksiklan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teksiklan $Teksiklan)
    {
        $Teksiklan->update($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teksiklan  $Teksiklan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teksiklan $Teksiklan)
    {
        $Teksiklan->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
