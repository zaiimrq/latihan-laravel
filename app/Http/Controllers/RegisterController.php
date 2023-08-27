<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255|unique:users',
            'email' => 'required|email',
            'password' => 'required|min:3|max:255'
        ]);

        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        return redirect('/login')->with('success', 'Register successfull, please login');
    }
}
