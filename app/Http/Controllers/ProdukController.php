<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk()
    {
        $produk = DB::table('produks')
            ->join('kategori_produks', 'produks.kategori_id', '=', 'kategori_produks.id')
            ->select('produks.*', 'kategori_produks.nama_kategori')
            ->get()
            ->groupBy('nama_kategori');

        return view('katalogProduk', compact('produk'));
    }


    public function getNamaFileGambar($id)
    {
        $produk = DB::table('produks')->where('id', $id)->first();

        if (!$produk || !$produk->gambar) {
            abort(404);
        }

        $path = public_path('storage/produk/' . $produk->gambar);

        if (!file_exists($path)) {
            $path = public_path('storage/produk/default.jpg');
        }


        return response()->file($path);
    }



}
