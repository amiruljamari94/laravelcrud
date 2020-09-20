<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        // $user = User::find(2);
        // $name = $user->name;
        // $email = $user->email;
        //dd($email);
        // return view('profile')->with(['name' => $user->name, 'email' => $user->email]); cara pertama pass data ke view
        return view('profile')->with(compact('user'));
    }
}
