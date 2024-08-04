<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    
    protected $fillable = [
        'user_id',
        'nama_pegawai',
        'alamat',
        'no_hp',
        'jabatan',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pembelianBarang()
    {
        return $this->hasMany(PembelianBarang::class, 'id_pegawai');
    }

    public function datalaundryMembers()
    {
        return $this->hasMany(DatalaundryMember::class, 'id_pegawai');
    }
}
