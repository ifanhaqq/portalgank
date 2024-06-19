@extends('layouts.admin-layout')
@section('content')
    <div class="page-content" style="margin-top: 12vh; margin-left: 280px">
        <div class="container">
            <div class="container" style="margin-top: 12vh;">
                <div class="row d-flex justify-content-center">
                    <div class="col-7 bg-black mt-4 rounded-4 mt-5">
                        <h3 class="text-white fw-bolder mt-3 ms-3 mb-3 "><em>ARTIKEL HARI INI</em></h3>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-4">
                    <div class="col-7 bg-secondary rounded-4 d-flex justify-content-between">
                        <h3 class="text-white fw-bolder mt-5 mb-5 ms-3 align-self-center"><em>JUMLAH <span class="fw-bolder"
                                    style="color: rgba(120, 5, 5, 1)">LAPORAN</span> MASUK HARI INI</em></h3>
                        <h1 class="text-white fw-bolder align-self-center me-4">3</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-4">
                    <div class="col-7 rounded-4" style="background-color: rgba(120, 5, 5, 1)">
                        <div class=" d-flex justify-content-between border-bottom border-3">
                            <h5 class="text-white fw-bolder mt-3 mb-3 ms-3"><em>JUMLAH SEMUA LAPORAN</em></h5>
                            <h5 class="text-white fw-bolder align-self-center me-4"><em>23</em></h5>
                        </div>
                        <div class=" d-flex justify-content-between border-bottom border-3">
                            <h5 class="text-white fw-bolder mt-3 mb-3 ms-3"><em>LAPORAN DITINJAU</em></h5>
                            <h5 class="text-white fw-bolder align-self-center me-4"><em>3</em></h5>
                        </div>
                        <div class=" d-flex justify-content-between border-bottom border-3">
                            <h5 class="text-white fw-bolder mt-3 mb-3 ms-3"><em>LAPORAN DIPROSES</em></h5>
                            <h5 class="text-white fw-bolder align-self-center me-4"><em>10</em></h5>
                        </div>
                        <div class=" d-flex justify-content-between">
                            <h5 class="text-white fw-bolder mt-3 mb-3 ms-3"><em>LAPORAN SELESAI</em></h5>
                            <h5 class="text-white fw-bolder align-self-center me-4"><em>10</em></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
