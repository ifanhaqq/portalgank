@extends('layouts.admin-layout')

@section('content')
    <div class="page-content" style="margin-top: 12vh; margin-left: 200px">
        <div class="container">
            <div class="row">
                <div class="col-11">
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
                                    <th scope="col" class="border border-black border-3 fw-bolder" style="width: 3vw">No
                                    </th>
                                    <th scope="col" class="border border-black border-3 fw-bolder ">Tanggal</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder ">Lokasi</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder ">Nama Pelapor</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder ">Kategori</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder ">Detail</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder ">Bukti Pendukung</th>
                                    <th scope="col" class="border border-black border-3 fw-bolder ">Detail Terduga Pelaku
                                    </th>
                                    <th scope="col" class="border border-black border-3 fw-bolder " style="width: 22vh">
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody class="border border-black border-3">
                                @for ($i = 0; $i < $count; $i++)
                                    <tr class="border border-black border-3">
                                        <th scope="row">{{ $i + 1 }}</th>
                                        <td class="border border-black border-3">{{ $chronologiesDate[$i] }}</td>
                                        <td class="border border-black border-3">{{ $chronologies[$i]['location'] }}</td>
                                        <td class="border border-black border-3">{{ $reporters[$i]['name'] }}</td>
                                        <td class="border border-black border-3">{{ $chronologies[$i]['category'] }}</td>
                                        <td class="border border-black border-3">
                                            {{ $chronologies[$i]['detail'] }}
                                        </td>
                                        <td class="border border-black border-3">
                                            <a href="{{ asset("storage/img/{$chronologies[$i]['supporting_evidence']}") }}"
                                                target="_blank"><em>Lihat bukti</em></a>
                                        </td>
                                        <td class="border border-black border-3">
                                            <a href="" role="button" target="_blank" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><em>Lihat disini</em></a>
                                        </td>
                                        <td class="d-flex justify-content-center border border-0">
                                            @switch($reports[$i]['status'])
                                                @case('tinjau')
                                                    <div class="col-9 bg-primary text-center rounded-pill text-white fw-bolder">
                                                        Ditinjau
                                                    </div>
                                                @break

                                                @case('proses')
                                                    <div class="col-9 bg-warning text-center rounded-pill text-white fw-bolder">
                                                        Diproses
                                                    </div>
                                                @break

                                                @case('selesai')
                                                    <div class="col-9 bg-success text-center rounded-pill text-white fw-bolder">
                                                        Selesai
                                                    </div>
                                                @break
                                            @endswitch
                                        </td>
                                    </tr>
                                @endfor

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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel">Detail terduga pelaku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <h5>Nama : Ipan</h5>
                        <hr>
                        <h5>Profesi : Mahasiswa</h5>
                        <hr>
                        <h5>Nomor Induk : 09012</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
