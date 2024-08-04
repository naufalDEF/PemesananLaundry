<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLaundryNonMember;
use App\Models\Pegawai;


class DataLaundryNonMemberController extends Controller
{
    public function index()
    {
        $datalaundryNonMembers = DataLaundryNonMember::with('pegawai')->paginate(10);
        return view('datalaundrynonmember.index', compact('datalaundryNonMembers'));
    }

    public function show($id)
    {
        $datalaundryNonMember = DataLaundryNonMember::with('pegawai')->findOrFail($id);
        return view('datalaundrynonmember.show', compact('datalaundryNonMember'));
    }

    public function create()
    {
        $pegawai = Pegawai::all();
        return view('datalaundrynonmember.create', compact('pegawai'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_transaksi' => 'required|date',
            'nama_customer' => 'required|string|max:150',
            'alamat' => 'required|string',
            'no_telp' => 'required|string|max:16',
            'keterangan' => 'required',
            'status_laundry' => 'required|in:menunggu,diproses,selesai',
            'status_pembayaran' => 'required|in:bayar,belum',
            'lokasi_kirim' => 'required',
        ]);

        DataLaundryNonMember::create($request->all());

        return redirect()->route('datalaundrynonmember.index')->with('success', 'Data laundry non-member berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $datalaundryNonMember = DataLaundryNonMember::findOrFail($id);
        $pegawai = Pegawai::all();
        return view('datalaundrynonmember.edit', compact('datalaundryNonMember', 'pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tgl_transaksi' => 'required|date',
            'nama_customer' => 'required|string|max:150',
            'alamat' => 'required|string',
            'no_telp' => 'required|string|max:16',
            'id_pegawai' => 'required|exists:pegawai,id',
            'keterangan' => 'required|string',
            'status_laundry' => 'required|in:menunggu,diproses,selesai',
            'status_pembayaran' => 'required|in:bayar,belum',
            'lokasi_kirim' => 'required|string',
        ]);

        $datalaundryNonMember = DataLaundryNonMember::findOrFail($id);
        $datalaundryNonMember->update($request->all());

        return redirect()->route('datalaundrynonmember.index')->with('success', 'Data Laundry Non-Member berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $datalaundryNonMember = DataLaundryNonMember::findOrFail($id);
        $datalaundryNonMember->delete();

        return redirect()->route('datalaundrynonmember.index')->with('success', 'Data Laundry Non-Member berhasil dihapus!');
    }
}
