<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    public function store(Request $request)
    {
        $relation = new \App\Relationship;
        $relation->follower_id = $request->user()->id;
        $relation->followed_id = $request->input('followed_id');
        $relation->save();
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        \DB::table('relationships')->where([
            ['follower_id', $request->user()->id],
            ['followed_id', $request->input('followed_id')],
        ])->delete();
        return redirect('/');        
    }
    
}
