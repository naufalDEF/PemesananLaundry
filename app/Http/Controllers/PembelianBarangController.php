<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembelianBarang;
use App\Models\Pegawai;
use App\Models\Barang;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PembelianBarangController extends Controller
{
    public function index(): View
    {
        $pembelianBarang = PembelianBarang::with('barang', 'pegawai')->paginate(10);
        return view('pembelianbarang.index', compact('pembelianBarang'));
    }

    public function create(): View
    {
        $pegawai = Pegawai::all();
        $barang = Barang::all();
        return view('pembelianbarang.create', compact('pegawai', 'barang'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer',
        ]);

        PembelianBarang::create($request->all());

        return redirect()->route('pembelianbarang.index')->with('success', 'Pembelian barang berhasil ditambahkan!');
    }

    public function edit($id): View
    {
        $pembelianBarang = PembelianBarang::findOrFail($id);
        $pegawai = Pegawai::all();
        $barang = Barang::all();
        return view('pembelianbarang.edit', compact('pembelianBarang', 'pegawai', 'barang'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer',
        ]);

        $pembelianBarang = PembelianBarang::findOrFail($id);
        $pembelianBarang->update($request->all());

        return redirect()->route('pembelianbarang.index')->with('success', 'Pembelian barang berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse
    {
        $pembelianBarang = PembelianBarang::findOrFail($id);
        $pembelianBarang->delete();
        return redirect()->route('pembelianbarang.index')->with('success', 'Pembelian barang berhasil dihapus!');
    }
}
