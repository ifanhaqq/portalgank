@extends('layouts.user-layout')

@section('content')
    <div class="container" style="margin-top: 12vh">
        <div class="row">
            <div class="col-3 mt-4 d-flex justify-content-center rounded-pill" style="background-color: rgba(120, 5, 5, 1)">
                <h4 class="text-white fw-bolder mt-3 mb-3">Status Laporan Anda</h4>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-3 alert-dismissable d-flex justify-content-between" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table border border-black border-3 mt-4">
            <thead>
                <tr>
                    <th scope="col" class="border border-black border-3 fw-bolder" style="width: 3vw">No</th>
                    <th scope="col" class="border border-black border-3 fw-bolder" style="width: 15vw">Tanggal</th>
                    <th scope="col" class="border border-black border-3 fw-bolder">Kategori</th>
                    <th scope="col" class="border border-black border-3 fw-bolder" style="width: 10vw">Status</th>
                    <th scope="col" class="border border-black border-3 fw-bolder">Ulasan</th>
                </tr>
            </thead>
            <tbody class="border border-black border-3">
                @foreach ($reports as $report)
                    <tr class="border border-black border-3">
                        <th scope="row">1</th>
                        <td class="border border-black border-3">{{ $report->chronology_date }}</td>
                        <td class="border border-black border-3">{{ $report->chronology_category }}</td>
                        <td class="d-flex justify-content-center border border-0">
                            @switch($report->report_status)
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
                        @if ($report->report_status === 'selesai')
                            <td class="border border-black border-3"><a href="" class="feedback-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-id="{{ $report->report_id }}"><i class="bi bi-plus-circle-fill h4"></i></a></td>
                        @else
                            <td class="border border-black border-3"><i class="bi bi-plus-circle-fill h4"></i></td>
                        @endif
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title fw-bolder">Ulasan</h5>
                </div>
                <div class="modal-body">
                    <p class="text-center text-black">Ulasan anda sangat diperlukan untuk proses penanganan dan pencegahan
                        kekerasan seksual yang lebih baik di masa mendatang.</p>
                    <form method="POST" action="{{ route('store-feedback') }}">
                        @csrf
                        <input type="hidden" id="report_id" name="report_id">
                        <textarea class="form-control border border-black border-1" name="content" id="" cols="30" rows="5"
                            placeholder="Ulasan...."></textarea>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn bg-primary rounded-pill fw-bold text-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/feedback.js') }}"></script>
@endsection
