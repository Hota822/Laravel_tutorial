<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function new()
    {
        return view('users/new');
    }
    //

    public function show()
    {
        return view('users/show');
    }
}
