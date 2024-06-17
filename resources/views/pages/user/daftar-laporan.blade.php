@extends('layouts.user-layout')

@section('content')
    <div class="container" style="margin-top: 12vh">
        <div class="row">
            <div class="col-3 mt-4 d-flex justify-content-center rounded-pill" style="background-color: rgba(120, 5, 5, 1)">
                <h4 class="text-white fw-bolder mt-3 mb-3">Status Laporan Anda</h4>
            </div>

        </div>
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

    <div class="modal fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title fw-bolder">Ulasan</h5>
                </div>
                <div class="modal-body">
                    <p class="text-center text-black">Ulasan anda sangat diperlukan untuk proses penanganan dan pencegahan
                        kekerasan seksual yang lebih baik di masa mendatang.</p>
                    <form action="">
                        <textarea class="form-control border border-black border-1" name="" id="" cols="30" rows="5"
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
