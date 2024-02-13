<?php

namespace App\Http\Controllers\portal;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('portal.users.index', compact('users'));
    }
    public function show($id)
    {
        return null;
    }

    public function create()
    {
        return view('portal.users.create-user');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',

        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('users.index')->with('message', 'User create Successfylly');
    }
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('portal.users.editUser', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $data = $request->all();
        $user->update($data);

        return redirect()->route('users.index');
    }
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function myprofile()
    {
        return view('portal.users.profile');
    }

    public function editMyProfile()
    {
        return view('portal.users.editprofile');
    }

}
