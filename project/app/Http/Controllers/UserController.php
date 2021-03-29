<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $data['birthday'] = Carbon::createFromFormat('Y-m-d', $data['birthday']);
        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}

