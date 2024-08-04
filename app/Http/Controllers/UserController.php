<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\User;


class UserController extends Controller
{
    public function show(string $id): View
    {
        return view('users.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create(): View
    {
        return view('users.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|min:5|unique:users,name',
            'email' => 'required|email|min:5|unique:users,email',
            'password' => 'required|min:5',
            'role' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => md5($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('users.index')->with('success', 'Pengguna berhasil ditambahkan!');
    }

    public function edit(string $id): View {
        $users = User::findOrFail($id);
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
    $request->validate([
        'name' => 'required|min:5',
        'email' => 'required|email|min:5',
        'password' => 'required|min:5',
        'role' => 'required',
    ]);
    $user = User::findOrFail($id);
    $user->update([
        'name'  => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
    ]);

    return redirect()->route('users.index')->with('success', 'Pengguna berhasil diubah!');
    }

    public function destroy($id): RedirectResponse
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
