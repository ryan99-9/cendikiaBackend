<?php

namespace App\Http\Controllers;

use App\Models\Dataorangtuadansiswa;
use Illuminate\Http\Request;

class DataorangtuadansiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Dataorangtuadansiswa::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Dataorangtuadansiswa::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataorangtuadansiswa  $Dataorangtuadansiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Dataorangtuadansiswa $Dataorangtuadansiswa)
    {
        return response()->json($Dataorangtuadansiswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataorangtuadansiswa  $Dataorangtuadansiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataorangtuadansiswa $Dataorangtuadansiswa)
    {
        $Dataorangtuadansiswa->update($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataorangtuadansiswa  $Dataorangtuadansiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataorangtuadansiswa $Dataorangtuadansiswa)
    {
        $Dataorangtuadansiswa->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
