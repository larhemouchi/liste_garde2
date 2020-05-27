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
        return view('servicies.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicy = Servicy::create($request->all());

        return $servicy;
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
        return view('servicies.edit', compact('servicy'));
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
        $servicy->update($request->all());

        return $servicy;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicy  $servicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicy $servicy)
    {
        $servicy->delete();

        return true;
    }
}
