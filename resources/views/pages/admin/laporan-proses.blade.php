@extends('layouts.admin-layout')

@section('content')
    <div class="page-content" style="margin-top: 12vh; margin-left: 200px">
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <div class="d-flex flex-column">
                        <h3 class="fw-bolder mt-5 mb-4">
                            Laporan Diproses
                        </h3>
                        <div class="input-group rounded border border-2">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                        <p class=" text-black mt-4"><i class="bi bi-crosshair"></i> Klik pada nama pelapor untuk menghubungi pelapor tersebut.</p>
                        <table class="table border border-black border-3">
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
                                @php $no = 1 @endphp
                                @foreach ($reports as $report)
                                    <tr class="border border-black border-3">
                                        <th scope="row">{{ $no }}</th>
                                        <td class="border border-black border-3">{{ $report->chronology_date }}</td>
                                        <td class="border border-black border-3">{{ $report->chronology_location }}</td>
                                        <td class="border border-black border-3"><a href="https://wa.me/6289674616924" target="_blank" class="text-decoration-underline">{{ $report->reporter_name }}</a></td>
                                        <td class="border border-black border-3">{{ $report->chronology_category }}</td>
                                        <td class="border border-black border-3">
                                            {{ $report->chronology_detail }}
                                        </td>
                                        <td class="border border-black border-3">
                                            <a href="{{ asset("storage/img/{$report->chronology_supporting_evidence}") }}"
                                                target="_blank"><em>Lihat bukti</em></a>
                                        </td>
                                        <td class="border border-black border-3">
                                            <a href="" role="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><em>Lihat disini</em></a>
                                        </td>
                                        <td class="d-flex justify-content-center border border-0">
                                            <div class="change-status col-9" data-id="{{ $report->report_id }}">
                                                @switch($report->report_status)
                                                    @case('tinjau')
                                                        <button type="button"
                                                            class="btn bg-primary text-center rounded-pill text-white fw-bolder"
                                                            data-bs-toggle="modal" data-bs-target="#statusModal">
                                                            Ditinjau
                                                        </button>
                                                    @break

                                                    @case('proses')
                                                        <button type="button"
                                                            class="btn bg-warning text-center rounded-pill text-white fw-bolder"
                                                            data-bs-toggle="modal" data-bs-target="#statusModal">
                                                            Diproses
                                                        </button>
                                                    @break

                                                    @case('selesai')
                                                        <button type="button"
                                                            class="btn bg-success text-center rounded-pill text-white fw-bolder"
                                                            data-bs-toggle="modal" data-bs-target="#statusModal">
                                                            Selesai
                                                        </button>
                                                    @break
                                                @endswitch
                                            </div>
                                        </td>
                                    </tr>
                                    @php $no++ @endphp
                                @endforeach

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
    <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel">Ubah status</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update-status') }}" method="POST">
                        @csrf
                        <input type="hidden" name="report_id" id="report_id">
                        <select class="form-control" name="status" id="">
                            <option value="tinjau">Tinjau</option>
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                        </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Ubah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/update-status.js') }}"></script>
@endsection
