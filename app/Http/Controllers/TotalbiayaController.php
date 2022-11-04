<?php

namespace App\Http\Controllers;

use App\Models\Totalbiaya;
use Illuminate\Http\Request;

class TotalbiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Totalbiaya::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Totalbiaya::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Totalbiaya  $totalbiaya
     * @return \Illuminate\Http\Response
     */
    public function show(Totalbiaya $totalbiaya)
    {
        return response()->json($totalbiaya);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Totalbiaya  $totalbiaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Totalbiaya $totalbiaya)
    {
        $totalbiaya->update($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Totalbiaya  $totalbiaya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Totalbiaya $totalbiaya)
    {
        $totalbiaya->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
