<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_produk',
        'kategori_id',
        'deskripsi',
        'harga_sewa',
        'stok',
        'gambar'
    ];
    // relasi kategori
    public function kategori_produk()
    {
        return $this->belongsTo(
            kategori_produk::class,
            "kategori_id",
            ownerKey:"id"
        );
    }

    public function rentals()
    {
        return $this->belongsToMany(Rental::class, 'detail_rental')
                    ->withPivot('jumlah', 'harga')
                    ->withTimestamps();
    }


    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('gambar') && ($model->getOriginal('gambar') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('gambar'));
            }
        });
    }
}
