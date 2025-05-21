<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_rental extends Model
{
    use HasFactory;
    protected $fillable = [
        'rental_id',
        'produk_id',
        'jumlah',
        'harga_satuan',
        'subtotal'
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

    // relasi produk
    public function produk()
    {
        return $this->belongsTo(
            produk::class,
            "produk_id",
            ownerKey:"id"
        );
    }
}
