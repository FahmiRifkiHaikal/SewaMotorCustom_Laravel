@extends('template')
@section('title', 'Dashboard')
@section('content')
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Logo Rental Motor" style="width: 100px;">
        <div class="home-content">
            <h1>Selamat Datang di Custom Motor Rent</h1>
            <h4>
                <p id="harijam"></p>
            </h4>
            <p>Sewa motor impian Anda dengan mudah dan cepat yang pasti murah dari pada yang lain</p>
            <p>Buruan Sewa Sekarang! Promo terbatas ...!!!</p>
        </div>
    </header>
    <div class="container">
        <h2>Pilihan Motor</h2>
        <div class="pilihan-motor">
            <div class="motor">
                <a href="#" id="motor120ccLink">
                    <img src="{{ asset('images/120cc.jpeg') }}" alt="Motor 120cc">
                    <h4>120cc</h4>
                    <p>Mulai dari Rp. 150.000/hari</p>
                    <p>Tahun: 2022</p>
                    <p>Kapasitas Penumpang: 2</p>
                </a>
            </div>
            <div class="motor">
                <a href="#" id="motor150ccLink">
                    <img src="{{ asset('images/150cc.jpeg') }}" alt="Motor 150cc">
                    <h4>150cc</h4>
                    <p>Mulai dari Rp. 200.000/hari</p>
                    <p>Tahun: 2023</p>
                    <p>Kapasitas Penumpang: 2</p>
                </a>
            </div>
            <div class="motor">
                <a href="#" id="motor200ccLink">
                    <img src="{{ asset('images/200cc.jpeg') }}" alt="Motor 200cc">
                    <h4>200cc</h4>
                    <p>Mulai dari Rp. 250.000/hari</p>
                    <p>Tahun: 2021</p>
                    <p>Kapasitas Penumpang: 2</p>
                </a>
            </div>
        </div>
    </div>
@endsection
