<?php

namespace App\Http\Controllers;

use App\Models\Biayapengajardansiswa;
use Illuminate\Http\Request;

class BiayapengajardansiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Biayapengajardansiswa::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Biayapengajardansiswa::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biayapengajardansiswa  $biayapengajardansiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Biayapengajardansiswa $biayapengajardansiswa)
    {
        return response()->json($biayapengajardansiswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biayapengajardansiswa  $biayapengajardansiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biayapengajardansiswa $biayapengajardansiswa)
    {
        $biayapengajardansiswa->update($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biayapengajardansiswa  $biayapengajardansiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biayapengajardansiswa $biayapengajardansiswa)
    {
        $biayapengajardansiswa->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
