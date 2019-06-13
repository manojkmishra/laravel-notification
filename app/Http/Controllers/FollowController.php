<?php

namespace App\Http\Controllers;
use App\User;
use App\Follow;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FollowController extends Controller
{
    //
    public function index()
    {
        return view('users.index', [
            'users' => User::where('id', '!=', Auth::id())->get()
        ]);
    }
}
