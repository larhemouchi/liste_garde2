<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Bouncer;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find( $id );

        return view('users.show', compact('user'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find( $id );
        $pass = False;
        $position;

        if( Bouncer::is($user)->a('superAdmin') ){

            $position = 0;
        }elseif( Bouncer::is($user)->an('admin') ){

            $position = 1;

        }else{
            $position = 3;
        }


        return view('users.edit', compact('user', 'pass', 'position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
          
        $user->update($request->all());

        $user->retract('admin');
        $user->retract('user');
        $user->retract('superAdmin');


        if($request['position'] == 0 ){

            $user->assign('superAdmin');

        }elseif($request['position'] == 1 ){

            $user->assign('admin');

        }else{

            $user->assign('user');

        }




        return view('users.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->specs()->detach();

        $user->servicies()->detach();

        $user->delete();


        return true;



        //droping pivote table
        //servicy_user
        //specuser


    }
}
