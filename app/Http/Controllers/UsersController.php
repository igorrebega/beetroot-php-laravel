<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('home');
    }

    public function edit(User $user)
    {
        return view('users/edit', [
            'user' => $user
        ]);
    }

    public function update(User $user, Request $request)
    {
        $user->name = $request->get('name');

        $user->save();

        return redirect()->route('users.update', ['id' => $user->id]);
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route('home');
    }
}
