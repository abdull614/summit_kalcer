<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan_kontak extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_pengirim',
        'email_pengirim',
        'subjek',
        'isi_pesan',
        'status',
        'tanggal_kirim'
    ];

    // relasi user
    public function user()
    {
        return $this->belongsTo(
            User::class,
            "user_id",
            ownerKey:"id"
        );
    }
}
