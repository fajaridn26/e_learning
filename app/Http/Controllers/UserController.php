<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select(['id', 'name', 'email', 'role'])->orderBy('created_at', 'desc')->get();

        return view('user.index', compact('users'));
    }

      public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => 12345,
        ]);

        return redirect()->back()->with('success', "Mahasiswa '{$request->name}' Berhasil Ditambahkan!");
    }

      public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $users = User::findOrFail($id);

        $users->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('updateSuccess', 'Mahasiswa Berhasil Diubah!');
    }

    public function updateRole(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:Dosen,Mahasiswa',
        ]);

        $users = User::findOrFail($id);

        $users->update([
            'role' => $request->role
        ]);

        return redirect()->back()->with('updateRoleSuccess', 'Role berhasil diubah!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $userName = $user->name;

        $user->delete();

        return redirect()->back()->with('deleteSuccess', "Mata Kuliah '{$userName}' Berhasil Dihapus!");
    }
}
