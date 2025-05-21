@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/katalogProduk.css') }}">
@endsection

@section('content')
    <!-- Popup HTML -->
    {{-- <div id="popup-sewa" class="popup-overlay">
        <div class="popup-content">
            <h2 id="popup-nama-produk">Nama Produk</h2>
            <div class="jumlah-control">
                <button id="btn-kurang">−</button>
                <span id="jumlah-sewa">1</span>
                <button id="btn-tambah">+</button>
            </div>
            <div class="popup-buttons">
                <button id="btn-konfirmasi">Konfirmasi</button>
                <button id="btn-batal">Batal</button>
            </div>
        </div>
    </div> --}}

    <!-- Hero Section Header -->
    <section class="hero" id="katalogProduk">
        <main class="content">
            <h1>Katalog Produk Summit <span>Kalcer.</span></h1>
        </main>
    </section>
    <!-- Hero Section Header End -->

    <!-- Hero Section Content -->
    <section class="hero-produk" id="katalogProduk">
        <main class="content">
            <h1>Untuk Disewakan</h1>
            @foreach ($produk as $kategori => $items)
                <section class="hero-produk" id="katalogProduk">
                    <main class="content-produk">
                        <h1>{{ $kategori }}</h1>
                        <div class="card-container">
                            @foreach ($items as $item)
                                <div class="card">
                                    <img src="{{ asset('storage/' . $item->gambar) }}">
                                    <h3>{{ $item->nama_produk }}</h3>
                                    <p>Rp {{ number_format($item->harga_sewa, 0, ',', '.') }} / hari</p>
                                    <a href="#" class="btn-sewa">Sewa Sekarang</a>
                                </div>
                            @endforeach
                        </div>
                    </main>
                </section>
            @endforeach

        </main>
    </section>
    <!-- Hero Section Content end-->
@endsection
