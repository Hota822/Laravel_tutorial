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
        $admin = \Auth::user()->admin;
        return view('users/index', ['users' => $users, 'admin' => $admin]);
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
        $microposts = $user->microposts()->paginate(10);
        return view('users/show', ['user' => $user, 'microposts' => $microposts]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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

        // if delete myself, redirect to login page
        return redirect('users')
            ->withInput()
            ->with('success', 'user was successfly deleted');
    }

    public function followers($id)
    {
        $title = 'Followers';
        $user = User::find($id);
        $users = $user->followers()->paginate(5);
        return view('users.show_follow', ['user' => $user, 'users' => $users, 'title' => $title, 'id' => $user->id]);
    }

    public function following($id)
    {
        $title = 'Following';
        $user = User::find($id);
        $users = $user->following()->paginate(5);
        return view('users.show_follow', ['user' => $user, 'users' => $users, 'title' => $title, 'id' => $user->id]);
    }


}
