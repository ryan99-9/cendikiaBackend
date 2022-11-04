<?php

namespace App\Http\Controllers;

use App\Models\Notifyadmin;
use Illuminate\Http\Request;

class NotifyadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Notifyadmin::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Notifyadmin::create($request->all());
        return response()->json(['message'=>'sukses'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notifyadmin  $notifyadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Notifyadmin $notifyadmin)
    {
        return response()->json($notifyadmin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notifyadmin  $notifyadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notifyadmin $notifyadmin)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notifyadmin  $notifyadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notifyadmin $notifyadmin)
    {
        $notifyadmin->delete();
        return response()->json(['message'=>'sukses'],200);
    }
}
