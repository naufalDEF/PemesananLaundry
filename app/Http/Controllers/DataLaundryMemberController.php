<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLaundryMember;
use App\Models\Pegawai;
use App\Models\Member;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DataLaundryMemberController extends Controller
{
    public function show($id): View
    {
        $datalaundryMember = DatalaundryMember::with('member', 'pegawai')->findOrFail($id);
        return view('datalaundrymember.show', compact('datalaundryMember'));
    }

    public function index(): View
    {
        $datalaundryMembers = DataLaundryMember::with('member', 'pegawai')->paginate(10);
        return view('datalaundrymember.index', compact('datalaundryMembers'));
    }

    public function create(): View
    {
        $pegawai = Pegawai::all();
        $members = Member::all();
        return view('datalaundrymember.create', compact('pegawai', 'members'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tgl_transaksi' => 'required|date',
            'keterangan' => 'required',
            'status_laundry' => 'required|in:menunggu,diproses,selesai',
            'status_pembayaran' => 'required|in:bayar,belum',
            'lokasi_kirim' => 'required',
        ]);

        DataLaundryMember::create($request->all());

        return redirect()->route('datalaundrymember.index')->with('success', 'Data Laundry Member berhasil ditambahkan!');
    }

    public function edit($id): View
    {
        $datalaundryMember = DataLaundryMember::findOrFail($id);
        $pegawai = Pegawai::all();
        $members = Member::all();
        return view('datalaundrymember.edit', compact('datalaundryMember', 'pegawai', 'members'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'tgl_transaksi' => 'required|date',
            'keterangan' => 'required',
            'status_laundry' => 'required|in:menunggu,diproses,selesai',
            'status_pembayaran' => 'required|in:bayar,belum',
            'lokasi_kirim' => 'required',
        ]);

        $datalaundryMember = DataLaundryMember::findOrFail($id);
        $datalaundryMember->update($request->all());

        return redirect()->route('datalaundrymember.index')->with('success', 'Data Laundry Member berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse
    {
        $datalaundryMember = DataLaundryMember::findOrFail($id);
        $datalaundryMember->delete();
        return redirect()->route('datalaundrymember.index')->with('success', 'Data Laundry Member berhasil dihapus!');
    }
}