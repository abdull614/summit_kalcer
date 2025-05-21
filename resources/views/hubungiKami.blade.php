@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/hubungiKami.css') }}">
@endsection

@section('content')
    <!-- Hero Section Header -->
    <section class="hero" id="katalogProduk">
        <main class="content">
            <h1>Contact Summit <span>Kalcer.</span></h1>
        </main>
    </section>
    <!-- Hero Section Header End -->

    <!-- Contact -->
    <section class="hero-contact">
        <main class="content">
            <h1>Sewa Alat Gunung, Alat Camping dan Perlengkapan Outdoor Solo</h1>
            <div class="contact-buttons">
                <a href="https://wa.me/6281234567890" target="_blank" class="btn-contact">WhatsApp</a>
                <a href="https://instagram.com/summitkalcer" target="_blank" class="btn-contact">Instagram</a>
                <a href="https://tiktok.com/@summitkalcer" target="_blank" class="btn-contact">TikTok</a>
            </div>
        </main>
    </section>
    <!-- Contact End -->
@endsection
