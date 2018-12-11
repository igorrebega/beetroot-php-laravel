<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users/index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $user = new User();
        $user->name = \request('name');
        $user->email = \request('email');
        $user->password = bcrypt(\request('password'));

        $user->save();

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users/edit', [
            'user' => $user
        ]);
    }

    public function update($id)
    {

    }

    public function delete($id)
    {
        User::query()->where('id', $id)->delete();

        return redirect()->route('home');
    }
}
