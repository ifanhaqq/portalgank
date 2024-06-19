@extends('layouts.admin-layout')

@section('content')
    <div class="page-content" style="margin-top: 12vh; margin-left: 240px">
        <div class="container">

            <div class="d-flex">
                <h3 class="fw-bolder me-2 align-self-center mt-5">Artikel</h3>
                <div class="align-self-center">
                    <a href="{{ route('artikel-new') }}" class="btn bg-primary text-white fw-bolder ms-2 mt-5">+ Artikel baru</a>
                </div>
            </div>


            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides mt-4">
                        <li class="glide__slide">
                            <div class="card border border-2" style="width: 22rem;">
                                <img src="{{ asset('img/kekerasan-fisik.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-5 fw-bolder">1. Kekerasan fisik</h5>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn bg-primary text-white fw-bolder" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">More</a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="card border border-2" style="width: 22rem;">
                                <img src="{{ asset('img/kekerasan-psikis.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-5 fw-bolder">2. Kekerasan psikis</h5>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn bg-primary text-white fw-bolder">More</a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="card border border-2" style="width: 22rem;">
                                <img src="{{ asset('img/perundungan.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-5 fw-bolder">3. Perundungan</h5>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn bg-primary text-white fw-bolder">More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="glide__arrows mt-4 d-flex justify-content-center" data-glide-el="controls">
                    <button class="btn text-white me-1" type="button" data-glide-dir="<"
                        style="background-color: rgba(120, 5, 5, 1)"><i class="bi bi-caret-left-fill"></i></button>
                    <button class="btn text-white ms-1" type="button" data-glide-dir=">"
                        style="background-color: rgba(120, 5, 5, 1)"><i class="bi bi-caret-right-fill"></i></button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var glide = new Glide('.glide', {
            type: 'carousel',
            perView: 3,
            gap: 5
        })

        glide.mount()
    </script>
@endsection
