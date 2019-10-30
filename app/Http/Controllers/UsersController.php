<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //same as belog sentence: $users = \DB::table('users')->paginate(5);
        $users = User::paginate(5);
        return view('users/index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users/show', ['user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dump($id);
        return view('users/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @param  \Int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user_param, $user)
    {
        //dd($request->route()->parameter('user'));
        dump($user);
        dump($user_param);
        dd($request);
        $user_id = $request->route()->parameter('user');
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->action('UsersController@show',
        ['user' => $user_id])
                         ->withInput()
                         ->with('success', 'successfly updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
        $user->delete();

        return redirect('users')
            ->withInput()
            ->with('success', 'user was successfly deleted');
    }
}
