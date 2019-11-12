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
        $users = User::paginate(30);
        $admin = \Auth::user();
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
        if (is_null($user)) {
            return redirect('/');
        }
        $microposts = $user->microposts();
        $count = $microposts->count();
        $microposts = $microposts->paginate(30);
        return view('users/show', ['user' => $user,
                                   'microposts' => $microposts,
                                   'count' => $count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //revieve $id, and declare parameter in this function
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
    public function update(Request $request, User $user)
    {
        //$user_id = $request->route()->parameter('user')->id;
        $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:255', "unique:users,email,{$user->id}" ],
            'password' => ["same:password_confirmation"]
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->action('UsersController@show', ['user' => $user->id])
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
        $user->microposts()->delete();
        $user->delete();
        // if delete myself, redirect to login page
        return redirect('users')
            ->withInput()
            ->with('success', 'user was successfly deleted');
    }

    public function followers($id)
    {
        $title = 'followers';
        return self::makeRelation($title, $id);
    }

    public function following($id)
    {
        $title = 'following';
        return self::makeRelation($title, $id);
    }

    public function makeRelation($title, $id)
    {
        $user = User::find($id);
        $users = $user->$title();
        $title = ucfirst($title);
        $admin = \Auth::user();
        return view('users.show_follow', ['user' => $user,
                                          'users' => $users,
                                          'title' => $title,
                                          'id' => $user->id,
                                          'admin' => $admin,]);
    }
}
