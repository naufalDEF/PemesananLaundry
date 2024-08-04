<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';
    
    protected $fillable = [
        'user_id',
        'no_identitas',
        'nama_member',
        'alamat',
        'no_hp',
        'tgl_join',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function datalaundryMembers()
    {
        return $this->hasMany(DatalaundryMember::class, 'member_id');
    }
}
