<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MemberController extends Controller
{
    public function show(string $id):View {

        return view('member.profile',[
        'member' => Member::findOrFail($id)
        ]);
    }

    public function index(): View
    {
       $member = Member::latest()->paginate(10);
       return view('member.index',compact('member'));
    }

    public function create(): View
    {
        $users = User::where('role','member')->get();
        return view('member.create', compact('users'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'no_identitas' => 'required|int|min:5|unique:member,no_identitas',
            'nama_member' => 'required|min:5',
            'alamat' => 'required|min:5',
            'no_hp' => 'required|min:5',
            'tgl_join' => 'required|date',

        ]);

        Member::create([
            'user_id'          => $request->user_id,
            'no_identitas' => $request->no_identitas,
            'nama_member' => $request->nama_member,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tgl_join' => $request->tgl_join,
        ]);

        return redirect()->route('member.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(string $id): View
    {
        $member = Member::findOrFail($id);
        $users = User::where('role', 'member')->get();
        return view('member.edit', compact('member', 'users'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'no_identitas'  => 'required|int|min:5',
            'nama_member'   => 'required|min:5',
            'alamat'        => 'required|min:5',
            'no_hp'         => 'required|min:5',
            'tgl_join'      => 'required'
        ]);

        $member = Member::findOrFail($id);
        $member->update([
                'user_id'          => $request->user_id,
                'no_identitas'  => $request->no_identitas,
                'nama_member'  => $request->nama_member,
                'alamat'     => $request->alamat,
                'no_hp'     => $request->no_hp,
                'tgl_join'     => $request->tgl_join
            ]);

        return redirect()->route('member.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('member.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
