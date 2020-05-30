<?php

namespace App\Http\Controllers;

use App\{Spec, Roly};
use Illuminate\Http\Request;

class SpecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specs = Spec::all();
        return view('specs.index', compact('specs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rolies = Roly::all();
        return view('specs.add', compact('rolies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $spec = Spec::create($request->all());

        return view('specs.show', compact('spec'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function show(Spec $spec)
    {
        return view('specs.show', compact('spec'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function edit(Spec $spec)
    {
        $rolies = Roly::all();
        return view('specs.edit', compact('spec', 'rolies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spec $spec)
    {

          
        $spec->update($request->all());

        return view('specs.show', compact('spec'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spec $spec)
    {

        $spec->users()->detach();

        //$spec->servicies()->detach();

        $spec->delete();

        return true;
    }
}
