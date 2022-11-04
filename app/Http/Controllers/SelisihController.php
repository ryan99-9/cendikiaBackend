<?php

namespace App\Http\Controllers;

use App\Models\Selisih;
use Illuminate\Http\Request;

class SelisihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Selisih::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Selisih::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Selisih  $selisih
     * @return \Illuminate\Http\Response
     */
    public function show(Selisih $selisih)
    {
        return response()->json($selisih);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Selisih  $selisih
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Selisih $selisih)
    {
        $selisih->update($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Selisih  $selisih
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selisih $selisih)
    {
        $selisih->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
