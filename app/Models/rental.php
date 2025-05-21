<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'user_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'total_harga',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(
            User::class,
            "user_id",
            ownerKey:"id"
        );
    }
}
