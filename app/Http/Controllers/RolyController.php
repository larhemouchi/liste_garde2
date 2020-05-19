<?php

namespace App\Http\Controllers;

use App\Roly;
use Illuminate\Http\Request;

class RolyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rolies = Roly::all();
        return view('rolies.index', compact('rolies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rolies.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        $roly= Roly::create($request->all());

        return $roly;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roly  $roly
     * @return \Illuminate\Http\Response
     */
    public function show(Roly $roly)
    {
        return view('rolies.show', compact('roly'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roly  $roly
     * @return \Illuminate\Http\Response
     */
    public function edit(Roly $role)
    {
        $roly = $role;
        return view('rolies.edit', compact('roly'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roly  $roly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roly $role)
    {
        $roly = $role;
          
        $roly->update($request->all());

        return $roly;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roly  $roly
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roly $roly)
    {
        //
    }
}
