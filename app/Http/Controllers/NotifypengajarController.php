<?php

namespace App\Http\Controllers;

use App\Models\Notifypengajar;
use Illuminate\Http\Request;

class NotifypengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Notifypengajar::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Notifypengajar::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notifypengajar  $notifypengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Notifypengajar $notifypengajar)
    {
        return response()->json($notifypengajar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notifypengajar  $notifypengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notifypengajar $notifypengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notifypengajar  $notifypengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notifypengajar $notifypengajar)
    {
        $notifypengajar->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
