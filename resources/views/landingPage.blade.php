@extends('layout.landing-page-layout')

@section('content')
    <div class="bg-peoples mb-5" style="background-color: black">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center" style="margin-top: 35vh; margin-bottom: 40vh">
                    <h1 class="text-white display-4 fw-bolder">SATUAN
                        PENANGANAN & <br>PENCEGAHAN <span class="text-danger">KEKERASAN SEKSUAL</span></h1>

                    <button type="button" class="btn mt-4 laporkan-btn"><a href="">
                            <h3 class="text-white fw-bolder mt-1 mb-1 me-1 ms-1">LAPORKAN</h3>
                        </a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="container d-flex justify-content-between mt-5 mb-3">
            <h1 class="fw-bolder"><em>ARTIKEL</em></h1>
            <div class="align-self-center">
                <button type="button" class="btn text-white fw-bolder" id="prevCarousel" style="background-color: red"><i
                        class="bi bi-arrow-left-short"></i></button>
                <button type="button" class="btn text-white fw-bolder" id="nextCarousel" style="background-color: red"><i
                        class="bi bi-arrow-right-short"></i></button>
            </div>
        </div>
        <div class="custom-carousel">
            <div class="container-fluid">
                <div class="custom-carousel-inner">
                    <div class="custom-carousel-item">
                        <div class="card" style="width: 22rem;">
                            <img src="{{ asset('img/artikel-icon.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-white" style="background-color: black">
                                <h5 class="card-title">Card titsdfle</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the
                                    card's
                                    content.</p>
                                <a href="#" class="btn text-white fw-bold col-12 text-start"
                                    style="background-color: red">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-carousel-item ">
                        <div class="card" style="width: 22rem;">
                            <img src="{{ asset('img/artikel-icon.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-white" style="background-color: black">
                                <h5 class="card-title">Card titsdfle</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the
                                    card's
                                    content.</p>
                                <a href="#" class="btn text-white fw-bold col-12 text-start"
                                    style="background-color: red">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-carousel-item ">
                        <div class="card" style="width: 22rem;">
                            <img src="{{ asset('img/artikel-icon.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-white" style="background-color: black">
                                <h5 class="card-title">Card titsdfle</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the
                                    card's
                                    content.</p>
                                <a href="#" class="btn text-white fw-bold col-12 text-start"
                                    style="background-color: red">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-carousel-item ">
                        <div class="card" style="width: 22rem;">
                            <img src="{{ asset('img/artikel-icon.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-white" style="background-color: black">
                                <h5 class="card-title">Card titsdfle</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the
                                    card's
                                    content.</p>
                                <a href="#" class="btn text-white fw-bold col-12 text-start"
                                    style="background-color: red">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-carousel-item ">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('img/artikel-icon.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-white" style="background-color: black">
                                <h5 class="card-title">Card titsdfle</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the
                                    card's
                                    content.</p>
                                <a href="#" class="btn text-white fw-bold col-12 text-start"
                                    style="background-color: red">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex" style="height: 88vh;">
        <div class="col-sm-4">
            <div class="d-flex flex-column">
                <div class="" style="background-color: black; height: 44vh">
                    <h1 class="fw-bolder text-white mt-5 ms-5"><em>KENALI <br> BERBAGAI <br> BENTUK <br> KEKERASAN</em></h1>
                </div>
                <div class="" style="background-color: yellow; height: 44vh">
                    <h1 class="fw-bolder text-dark mt-5 ms-5"><em>RAHASIA PELAPOR <br> <span class="display-4 fw-bolder text-black">TERJAMIN AMAN!</span></em></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-3" style="background-color: brown; height: 88vh"></div>
        <div class="col-sm-5 d-flex flex-column">
            <div class="d-flex justify-content-center" style="background-color: cadetblue; height: 34vh">
                <h1 class="text-white fw-bolder align-self-center"><em>JANGAN TAKUT <br> <span class="display-4 fw-bolder">MELAPOR!</span></em></h1>
            </div>
            <div class="d-flex justify-content-center" style="background-color: black; height: 54vh">
                <h1 class="text-white fw-bolder mt-5 display-4"><em>KAMI SIAP <br> MENANGANI <br> DENGAN <span class="text-danger">SIGAP</span></em></h1>
            </div>
        </div>
    </div>
@endsection
