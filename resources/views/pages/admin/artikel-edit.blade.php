@extends('layouts.admin-layout')

@section('content')
    <div class="page-content" style="margin-top: 12vh; margin-left: 380px">
        <div class="container">

            <div class="d-flex">
                <h3 class="fw-bolder me-2 align-self-center mt-5 mb-4">Edit Artikel</h3>
            </div>

            <div class="col-10 bg-secondary-subtle rounded-5 mb-5">
                <form method="POST" action="{{ route('update-article', $article->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 ms-3 me-3">
                        <label for="exampleInputEmail1" class="form-label mt-4 fw-bold text-black">Judul artikel</label>
                        <input type="text" class="form-control rounded-pill border border-black" id="exampleInputEmail1"
                            name="title" value="{{ $article->title }}">
                    </div>
                    <div class="mb-3 ms-3 mt-3 me-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold text-black">Isi artikel</label>
                        <textarea class="form-control rounded-3 border border-black" name="content" id="" cols="30"
                            rows="10"> {{ $article->content }} </textarea>
                    </div>

                    <div class="mb-3 form-check mt-3 me-3">
                        <label class="form-label fw-bold text-black" for="exampleCheck1">Gambar saat ini:</label>
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset("storage/img/{$article->image}") }}" class="mb-4" style="width: 400px">
                        </div>

                    </div>

                    <div class="mb-3 form-check mt-3 me-3">
                        <label class="form-label fw-bold text-black" for="exampleCheck1">Unggah gambar baru</label>
                        <input type="file" class="form-control border border-black fw-bold text-black" name="file"
                            id="exampleCheck1">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mb-4 mt-4">Submit</button>
                    </div>

                </form>
            </div>



        </div>
    </div>
@endsection

@section('scripts')
@endsection
