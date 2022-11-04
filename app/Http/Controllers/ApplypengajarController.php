<?php

namespace App\Http\Controllers;

use App\Models\Applypengajar;
use Illuminate\Http\Request;

class ApplypengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Applypengajar::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Applypengajar::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applypengajar  $applypengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Applypengajar $applypengajar)
    {
        return response()->json($applypengajar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applypengajar  $applypengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applypengajar $applypengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applypengajar  $applypengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applypengajar $applypengajar)
    {
        $applypengajar->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
