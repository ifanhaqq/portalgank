@extends('layouts.admin-layout')

@section('content')
    <div class="page-content" style="margin-top: 12vh; margin-left: 400px">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="d-flex flex-column">
                        <h3 class="fw-bolder mt-5 mb-4">
                            Semua Laporan
                        </h3>
                        <div class="input-group rounded border border-2">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                        <table class="table border border-black border-3 mt-4">
                            <thead>
                                <tr>
                                    <th scope="col" class="border border-black border-3 fw-bolder" style="width: 3vw">No</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder">Tanggal</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder">Nama Pelapor</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder">Kategori</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder">Status</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder">More</th>
                                </tr>
                            </thead>
                            <tbody class="border border-black border-3">
                                <tr class="border border-black border-3">
                                    <th scope="row">1</th>
                                    <td class="border border-black border-3">8 September 2023</td>
                                    <td class="border border-black border-3">Otto</td>
                                    <td class="d-flex justify-content-center border border-0">
                                        <div class="col-9 bg-primary text-center rounded-pill text-white fw-bolder">Ditinjau</div>
                                    </td>
                                    <td class="border border-black border-3"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="bi bi-plus-circle-fill h4"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-7 ">
                    {{-- <div class="input-group rounded">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div> --}}
                </div>

            </div>


        </div>
    </div>
@endsection
