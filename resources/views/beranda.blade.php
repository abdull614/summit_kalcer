@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
    <!-- Hero Section start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Summit <span>Kalcer.</span> Outdoor</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus,
                nam.
            </p>
            <a href="#" class="cta">Sewa Sekarang</a>
        </main>
    </section>

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
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section class="about" id="about">
        <h2>Tentang Kami</h2>
    </section>
    <!-- About Section end -->
@endsection
