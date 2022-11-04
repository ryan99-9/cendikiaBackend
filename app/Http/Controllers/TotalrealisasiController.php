<?php

namespace App\Http\Controllers;

use App\Models\Totalrealisasi;
use Illuminate\Http\Request;

class TotalrealisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Totalrealisasi::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Totalrealisasi::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Totalrealisasi  $totalrealisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Totalrealisasi $totalrealisasi)
    {
        return response()->json($totalrealisasi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Totalrealisasi  $totalrealisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Totalrealisasi $totalrealisasi)
    {
        $totalrealisasi->update($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Totalrealisasi  $totalrealisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Totalrealisasi $totalrealisasi)
    {
        $totalrealisasi->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
