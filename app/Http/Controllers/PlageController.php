<?php

namespace App\Http\Controllers;

use App\Plage;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Validator;

class PlageController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Plage  $plage
     * @return \Illuminate\Http\Response
     */
    public function history(Plage $plage)
    {
        return view('plages.history', compact('plage'));
    }






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plages = Plage::all();
        return view('plages.index', compact('plages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //format('H:i:s')

        $validation = Validator::make($request->all(), [
            'name' => 'unique:plages',
        ]);


        $time_start = Carbon::parse($request->time_start);
        $time_end = Carbon::parse($request->time_end);


        if( $time_start < $time_end ){

            $plage = Plage::create($request->toArray());
            return $plage;

        }else{

            return back()
            ->withInput()
            ->withErrors([]) ;
            //['name.required', 'Name is required']

        }
        //$plage = Plage::create(['name' => $request->name]);
        return $request->toArray();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plage  $plage
     * @return \Illuminate\Http\Response
     */
    public function show(Plage $plage)
    {
        return view('plages.show', compact('plage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plage  $plage
     * @return \Illuminate\Http\Response
     */
    public function edit(Plage $plage)
    {
        return view('plages.edit', compact('plage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plage  $plage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plage $plage)
    {
          
        $plage->update($request->all());

        return $plage;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plage  $plage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plage $plage)
    {
        //
    }
}
