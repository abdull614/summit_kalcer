<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'rental_id',
        'tanggal_pembayaran',
        'jumlah_pembayaran',
        'metode_pembayaran',
        'status',
        'bukti_pembayaran'
    ];

    // relasi rental
     public function rental()
    {
        return $this->belongsTo(
            rental::class,
            "rental_id",
            ownerKey:"id"
        );
    }
}
