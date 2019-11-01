<?php

namespace App\Http\Controllers;

use App\Micropost;
use Illuminate\Http\Request;

class MicropostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('microposts.get');
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

        $micropost = new Micropost;
        $micropost->content = $request->input('textarea');
        $micropost->user_id = \Auth::user()->id;
        $micropost->save();
        
        return redirect('/');
                   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Micropost  $micropost
     * @return \Illuminate\Http\Response
     */
    public function show(Micropost $micropost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Micropost  $micropost
     * @return \Illuminate\Http\Response
     */
    public function edit(Micropost $micropost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Micropost  $micropost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Micropost $micropost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Micropost  $micropost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Micropost $micropost)
    {
        $micropost->delete();
        return redirect('/');
    }
}
