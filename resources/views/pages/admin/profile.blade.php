@extends('layouts.admin-layout')

@section('content')
    <div class="page-content" style="margin-top: 12vh; margin-left: 150px">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-9 row mt-3 text-center rounded-pill shadow-sm">
                        <h3 class="fw-bolder">Institution Profile</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center mt-4">
                    <div class="col-8 d-flex justify-content-center">
                        <img class="me-4" src="{{ asset('img/polindra.png') }}" alt="" style="width: 150px">
                        <h3 class="fw-bolder align-self-center">POLITEKNIK NEGERI INDRAMAYU</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center mt-4">
                    <div class="col-6 mt-4">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-black fw-bold">Nomor Whatsapp</label>
                                <input type="email" class="form-control border border-black" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-black fw-bold">Alamat</label>
                                <input type="text" class="form-control border border-black" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-black fw-bold">Instagram</label>
                                <input type="text" class="form-control border border-black" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-black fw-bold">Email</label>
                                <input type="text" class="form-control border border-black" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-black fw-bold">Upload Logo Instansi</label>
                                <input type="file" class="form-control border border-black" id="exampleInputPassword1">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit"
                                    class="btn btn-primary mb-5 text-white rounded-pill fw-bold mt-5">Submit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
