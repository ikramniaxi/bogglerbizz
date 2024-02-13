<?php

namespace App\Http\Controllers\portal;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class usersController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('portal.users.index', compact('users'));
    }
    public function show($id){
        return null;
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
