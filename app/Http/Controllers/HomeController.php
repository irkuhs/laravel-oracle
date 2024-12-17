<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('welcome', compact('users'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password ?? bcrypt('password');
        $user->save();

        return redirect()->route('home');
    }

    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('home');
    }

    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password ?? bcrypt('password');
        $user->save();

        return redirect()->route('home');
    }
}
