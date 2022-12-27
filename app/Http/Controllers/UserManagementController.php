<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class userManagementController extends Controller
{
    // Untuk memanggil halaman user management (Halaman Admin)
    public function index()
    {
        $user = User::all();
        return view(
            'Backend.userManagement.index',
            compact(
                'user',
            )
        );
    }

    // Untuk memanggil halaman create user management (Halaman Admin)
    public function create()
    {
        $roles = Role::all();
        $user = User::all();
        return view(
            'Backend.userManagement.create',
            compact(
                'roles',
                'user'
            )
        );
    }

    // Untuk menyimpan data user yang telah dibuat pada halaman create userManagement (Halaman Admin)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        if (User::where('email', '=', $request->email)->exists()) {
            return redirect()->route('userManagement.index')->with('alert', 'Email Sudah Tersedia');
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->assignRole($request->role);
            $user->save();

            return redirect()->route('userManagement.index')->with('success', 'Data User Berhasil Di Tambahkan');
        }

    }

    // Untuk memanggil halaman show user management (Halaman Admin)
    public function show($id)
    {
        $user = User::find($id);
        return view(
            'Backend.userManagement.show',
            compact(
                'user'
            )
        );
    }

    // Untuk memanggil halaman edit user management (Halaman Admin)
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view(
            'Backend.userManagement.edit',
            compact(
                'user',
                'roles'
            )
        );

    }

    // Untuk menyimpan data yang telah diubah pada halaman edit user management (Halaman Admin)
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->syncRoles($request->role);

        $user->save();
        return redirect()->route('userManagement.index')->with('success', 'Data User Baru Saja Di Edit');
    }

    // Untuk menghapus data user (Halaman Admin)
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('userManagement.index')->with('success', 'Data User Berhasil Di Hapus');
    }
}