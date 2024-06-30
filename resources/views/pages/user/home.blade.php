@extends('layouts.user-layout')

@section('content')
    <div class="container" style="margin-top: 12vh; position: relative">
        <div class="row d-flex justify-content-center">
            <div class="col-7 bg-black mt-4 d-flex justify-content-center rounded-top-4">
                <div class="col-8 text-center ">
                    <p class="text-white fw-bolder mt-3">KENALI KATEGORI KEKERASAN SEBELUM ANDA MELAPOR, UNTUK LEBIH MUDAH
                        MENGIDENTIFIKASI JENIS
                        KEKERASAN</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-7 text-center rounded-bottom-4" style="background-color: rgba(120, 5, 5, 1)">
                <a href=""><p class="text-white fw-bolder mt-3">LEBIH LANJUT...</p></a>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-7 bg-secondary rounded-4 d-flex justify-content-between">
                <h3 class="text-white fw-bolder mt-3 mb-3 ms-3"><em>JUMLAH <span class="fw-bolder"
                            style="color: rgba(120, 5, 5, 1)">LAPORAN</span></em></h3>
                <h1 class="text-white fw-bolder align-self-center me-4">{{ $count }}</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-7 rounded-pill d-flex justify-content-between" style="background-color: rgba(120, 5, 5, 1)">
                <h5 class="text-white fw-bolder mt-3 mb-3 ms-3"><em>STATUS LAPORAN TERAKHIR</em></h5>
                <h5 class="text-white fw-bolder align-self-center me-4"><em>DITINJAU</em></h5>
            </div>
        </div>
    </div>
@endsection
