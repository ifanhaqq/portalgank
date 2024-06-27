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
            <div class="col-7 bg-primary-subtle ">
                <form method="POST" action="{{ route('store-report') }}">
                    @csrf
                    <div class="mb-5">
                        <div class="mb-3 mt-3">
                            <div id="emailHelp" class="form-text">
                                <h5 class="text-black fw-bolder">Data Diri Pelapor</h5>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Sebagai</label>
                            <select id="disabledSelect" class="form-select" name="reporter_role">
                                <option value="saksi">Saksi</option>
                                <option selected value="korban">Korban</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="reporter_name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Profesi</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="reporter_profession">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor Induk</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="reporter_profession_id">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="reporter_address">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="reporter_phone_number">
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
                            <input type="text" class="form-control" id="exampleInputPassword1" name="suspect_name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Profesi</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="suspect_profession">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor Induk</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="suspect_profession_id">
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
                            <input type="date" class="form-control" id="exampleInputPassword1" name="chronology_date">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="chronology_location">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kategori Kekerasan</label>
                            <select id="disabledSelect" class="form-select" name="chronology_category">
                                <option selected value="Kekerasan Fisik">Kekerasan Fisik</option>
                                <option value="Kekerasan Psikis">Kekerasan Psikis</option>
                                <option value="Cyberbullying">Cyberbullying</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Detail Kejadian</label>
                            <textarea class="form-control" id="" cols="30" rows="4" name="chronology_detail"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Upload Bukti Pendukung (jika ada)</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" name="chronology_file">
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
