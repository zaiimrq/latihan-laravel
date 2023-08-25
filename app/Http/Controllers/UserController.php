<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function show(User $user)
    {
        return view('posts', [
            "title" => "All Post By " . $user->name,
            "posts" => $user->posts,
            "user" => true
        ]);
    }
}
