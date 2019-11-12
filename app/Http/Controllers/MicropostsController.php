<?php

namespace App\Http\Controllers;

use App\Micropost;
use Illuminate\Http\Request;
use App\Http\Requests\MicropostsRequest;

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
    public function store(MicropostsRequest $request)
    {
        self::createMicropost($request);
        // $micropost = new Micropost;
        // $micropost->content = $request->input('content');
        // $micropost->user_id = \Auth::user()->id;
        // $name = $request->picture->getClientOriginalName();
        // $micropost->picture = $name;
        // $micropost->save();
        // $request->picture = Image::make($request->picture)
        //        ->resize(300, null, function ($constraint) {
        //            $constraint->aspectRatio();
        //        });
        // $request->picture->storeAs('public/images', $micropost->id.'_'.$name);
        return redirect('/')
            ->withInput()
            ->with('success', 'Micropos created!');
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

    private function createMicropost($request)
    {

        $micropost = new Micropost;
        $micropost->content = $request->input('content');
        $micropost->user_id = \Auth::user()->id;
        $picture = $request->picture;
        $name = '';
        if (!empty($picture)) {
            $name = $request->picture->getClientOriginalName();
        }
        $micropost->picture = $name;
        $micropost->save();

        if (!empty($picture)) {
            self::storeImage($request->picture, $micropost->id, $name);
        }
    }

    private function storeImage($picture, $id, $name)
    {
        $width = getimagesize($picture);
        if ($width[0] > $width[1]) {
            $param = [ 400, null, function ($constraint) {
                $constraint->aspectRatio();
            }];
        } else {
            $param = [ null, 400, function ($constraint) {
                $constraint->aspectRatio();
            }];
        }
        if ($width[0] > 400 || $width[1] > 400) {
            $picture = \Image::make($picture)
                     ->resize(...$param);
            $picture->save('../storage/app/public/images/'.$id.'_'.$name);
            return;
        }
        $picture->storeAs('public/images', $id.'_'.$name);
    }
}
