@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/caraSewa.css') }}">
@endsection

@section('content')
    <!-- Hero Section Header -->
    <section class="hero" id="katalogProduk">
        <main class="content">
            <h1>Cara Sewa Summit <span>Kalcer.</span></h1>
        </main>
    </section>
    <!-- Hero Section Header End -->

    <!-- Hero Section Content -->
    <section class="hero-komitmen" id="home">
        <main class="content">
            <h1>
                Komitmen Summit <span>Kalcer.</span> Outdoor untuk Aktivitas dan Hoby
                Anda
            </h1>
            <p>
                Setiap langkah petualangan tak seharusnya terhambat oleh kekhawatiran
                soal perlengkapan. Summit Kalcer hadir sebagai solusi praktis dan
                andal untuk memenuhi kebutuhan perlengkapan outdoor Anda, tanpa harus
                repot, menguras tenaga, atau merogoh kocek terlalu dalam.
            </p>
            <p>
                Dengan produk-produk berkualitas dan fungsional, kami berkomitmen
                menjadi partner setia dalam setiap perjalanan Anda menjelajahi alam
                Indonesia. Tak perlu lagi bingung tentang perlengkapan apa yang
                dibutuhkan, di mana mendapatkannya, atau bagaimana merawatnya — Summit
                Kalcer menjawab semua itu agar Anda bisa fokus pada pengalaman dan
                semangat petualangan.
            </p>
            <a href="#" class="cta">Sewa Sekarang</a>
        </main>
    </section>
    <!-- Hero Section Content End -->
@endsection
