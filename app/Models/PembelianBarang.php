<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianBarang extends Model
{
    use HasFactory;

    protected $table = 'pembelian_barang';
    
    protected $fillable = [
        'kode_barang',
        'id_pegawai',
        'tanggal',
        'jumlah',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
