<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaranlbb;
use Illuminate\Http\Request;

class PengeluaranlbbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Pengeluaranlbb::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengeluaranlbb::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengeluaranlbb  $pengeluaranlbb
     * @return \Illuminate\Http\Response
     */
    public function show(Pengeluaranlbb $pengeluaranlbb)
    {
        return response()->json($pengeluaranlbb);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengeluaranlbb  $pengeluaranlbb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengeluaranlbb $pengeluaranlbb)
    {
        $pengeluaranlbb->update($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengeluaranlbb  $pengeluaranlbb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengeluaranlbb $pengeluaranlbb)
    {
        $pengeluaranlbb->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
