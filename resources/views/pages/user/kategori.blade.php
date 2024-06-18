@extends('layouts.user-layout')

@section('content')
    <div class="container" style="margin-top: 12vh">
        <div class="row d-flex justify-content-center">
            <div class="col-7 mt-4 rounded-pill" style="background-color: rgba(120, 5, 5, 1)">
                <h3 class="fw-bolder text-white text-center ms-3 mt-3 me-3 mb-3">Kenali berbagai jenis kategori kekerasan
                </h3>
            </div>

        </div>

        <div class="row mt-5 d-flex justify-content-center">
            <div class=" d-flex justify-content-center">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <div class="card border border-2" style="width: 25rem;">
                                    <img src="{{ asset('img/kekerasan-fisik.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-5 fw-bolder">1. Kekerasan fisik</h5>
                                        <div class="d-flex justify-content-end">
                                            <a href="#" class="btn bg-primary text-white fw-bolder"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">More</a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="card border border-2" style="width: 25rem;">
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
                                <div class="card border border-2" style="width: 25rem;">
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
    </div>

    <div class="modal modal-lg fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title fw-bolder"></h5>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/kekerasan-fisik.png') }}" alt="">
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <div class="col-10">
                            <h5 class="fw-bold">Kekerasan Fisik</h5>

                            <p class="text-black">Kekerasan fisik dilakukan oleh pelaku kepada Korban dengan kontak fisik
                                oleh pelaku kepada Korban dengan atau tanpa menggunakan alat bantu. Kekerasan fisik yang
                                dimaksud dapat berupa: <br>
                            <ol>
                                <li>tawuran atau perkelahian massal</li>
                                <li>penganiayaan</li>
                                <li>perkelahian</li>
                                <li>eksploitasi ekonomi melalui kerja paksa untuk memberikan 
                                    keuntungan ekonomi bagi pelaku
                                </li>
                                <li>pembunuhan</li>
                                <li>perbuatan lain yang dinyatakan sebagai Kekerasan 
                                    fisik dalam ketentuan peraturan
                                    perundang-undangan.</li>
                            </ol>
                            </p>
                        </div>
                    </div>




                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn bg-secondary rounded-pill fw-bold text-white"
                        data-bs-dismiss="modal">Close</button>
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
        })

        glide.mount()
    </script>
@endsection
