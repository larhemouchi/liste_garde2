<?php

namespace App\Http\Controllers;

use App\Servicy;
use Illuminate\Http\Request;

class ServicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicies = Servicy::all();
        return view('servicies.index', compact('servicies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicy  $servicy
     * @return \Illuminate\Http\Response
     */
    public function show(Servicy $servicy)
    {
        return view('servicies.show', compact('servicy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicy  $servicy
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicy $servicy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicy  $servicy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicy $servicy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicy  $servicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicy $servicy)
    {
        //
    }
}
