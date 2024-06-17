@extends('layouts.user-layout')

@section('content')
    <div class="container" style="margin-top: 12vh">
        <div class="row d-flex justify-content-center">
            <div class="col-7 mt-4 d-flex justify-content-center rounded-pill" style="background-color: rgba(120, 5, 5, 1)">
                <div class="col-10 text-center ">
                    <p class="text-white fw-bolder mt-3">Silahkan lengkapi formulir berikut untuk menambahkan sebuah laporan
                    </p>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-4 mb-5">
            <div class="col-7 bg-primary-subtle">
                <form>
                    <div class="mb-5">
                        <div class="mb-3 mt-3">
                            <div id="emailHelp" class="form-text">
                                <h5 class="text-black fw-bolder">Data Diri Pelapor</h5>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Sebagai</label>
                            <select id="disabledSelect" class="form-select">
                                <option>Saksi</option>
                                <option selected>Korban</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Profesi</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor Induk</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="mb-3 mt-3">
                            <div id="emailHelp" class="form-text">
                                <h5 class="text-black fw-bolder">Data Diri Pelaku</h5>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Profesi</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor Induk</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="mb-3 mt-3">
                            <div id="emailHelp" class="form-text">
                                <h5 class="text-black fw-bolder">Kronologi</h5>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Kejadian</label>
                            <input type="date" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Detail Kejadian</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Upload Bukti Pendukung (jika ada)</label>
                            <input type="file" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary rounded-pill text-white mb-4 fw-bold" style="background-color: rgba(1, 42, 89, 0.8)">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
