<?php

namespace App\Http\Controllers;

use App\Models\Datapengajar;
use Illuminate\Http\Request;

class DatapengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Datapengajar::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Datapengajar::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datapengajar  $Datapengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Datapengajar $Datapengajar)
    {
        return response()->json($Datapengajar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datapengajar  $Datapengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datapengajar $Datapengajar)
    {
        $Datapengajar->update($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datapengajar  $Datapengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datapengajar $Datapengajar)
    {
        $Datapengajar->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
