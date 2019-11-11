<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\User;
use Illminate\Support\Facades\Mail;
use App\Mail\ActivationCreated;

class AccountActivationController extends Controller
{
    public function activate(User $user)
    {
        $user->activation_digest = Uuid:uuid4();
        Mail::to($user->email)->send(new ActivationCreated($user));
    }
}
