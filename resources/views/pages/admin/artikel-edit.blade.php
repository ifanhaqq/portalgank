@extends('layouts.admin-layout')

@section('content')
    <div class="page-content" style="margin-top: 12vh; margin-left: 380px">
        <div class="container">

            <div class="d-flex">
                <h3 class="fw-bolder me-2 align-self-center mt-5 mb-4">Edit Artikel</h3>
            </div>

            <div class="col-10 bg-secondary-subtle rounded-5 mb-5">
                <form class="">
                        <div class="mb-3 ms-3 me-3">
                            <label for="exampleInputEmail1" class="form-label mt-4 fw-bold text-black">Judul artikel</label>
                            <input type="text" class="form-control rounded-pill border border-black" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        <div class="mb-3 ms-3 mt-3 me-3">
                            <label for="exampleInputPassword1" class="form-label fw-bold text-black">Isi artikel</label>
                            <textarea class="form-control rounded-3 border border-black" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3 form-check mt-3 me-3">
                            <label class="form-label fw-bold text-black" for="exampleCheck1">Upload gambar</label>
                            <input type="file" class="form-control border border-black fw-bold text-black" id="exampleCheck1">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        </div>
                        
                </form>
            </div>



        </div>
    </div>
@endsection

@section('scripts')
@endsection