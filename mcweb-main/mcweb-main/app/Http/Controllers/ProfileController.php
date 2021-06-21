<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function view()
    {
        $user = User::find(auth()->id());
        return view('profile', compact('user'));
    }
}
