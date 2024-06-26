@extends('layouts.landing-page-layout')

@section('content')
    <div class="bg-peoples" style="background-color: black">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center" style="margin-top: 35vh; margin-bottom: 40vh">
                    <h1 class="text-white display-4 fw-bolder">SATUAN
                        PENANGANAN & <br>PENCEGAHAN <span class="text-danger">KEKERASAN SEKSUAL</span></h1>

                    <button type="button" class="btn mt-4 laporkan-btn"><a href="{{ route('welcome-page') }}">
                            <h3 class="text-white fw-bolder mt-1 mb-1 me-1 ms-1">LAPORKAN</h3>
                        </a></button>
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
                    <h1 class="fw-bolder text-dark mt-5 ms-5"><em>RAHASIA PELAPOR <br> <span
                                class="display-4 fw-bolder text-black">TERJAMIN AMAN!</span></em></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-3" style="background-color: brown; height: 88vh"></div>
        <div class="col-sm-5 d-flex flex-column">
            <div class="d-flex justify-content-center" style="background-color: cadetblue; height: 34vh">
                <h1 class="text-white fw-bolder align-self-center"><em>JANGAN TAKUT <br> <span
                            class="display-4 fw-bolder">MELAPOR!</span></em></h1>
            </div>
            <div class="d-flex justify-content-center" style="background-color: black; height: 54vh">
                <h1 class="text-white fw-bolder mt-5 display-4"><em>KAMI SIAP <br> MENANGANI <br> DENGAN <span
                            class="text-danger">SIGAP</span></em></h1>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5" id="artikel">

        <div class="glide">
            <div class="container d-flex justify-content-between mt-5">
                <div class="align-self-end">
                    <h1 class="fw-bolder"><em>ARTIKEL</em></h1>
                </div>

                <div class="align-self-center">
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="btn text-white" type="button" data-glide-dir="<"
                            style="background-color: rgba(120, 5, 5, 1)"><i class="bi bi-caret-left-fill"></i></button>
                        <button class="btn text-white ms-1" type="button" data-glide-dir=">"
                            style="background-color: rgba(120, 5, 5, 1)"><i class="bi bi-caret-right-fill"></i></button>
                    </div>
                </div>
            </div>
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides mt-4" style="margin-left: 9vh">
                    @foreach ($articles as $article)
                        <li class="glide__slide">
                            <div class="card" style="width: 50vh;">
                                <img src="{{ asset("storage/img/{$article['image']}") }}" class="card-img-top border-danger"
                                    alt="..." style="border: 4px solid rgba(120, 5, 5, 1); width: 50vh; height: 50vh">
                                <div class="card-body text-white" style="background-color: black">
                                    <h5 class="card-title mb-3 fw-bolder">{{ $article['title'] }}</h5>
                                    <p class="card-text text-truncate mb-5">{{ $article['content'] }}</p>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn text-white fw-bolder" style="background-color: rgba(120, 5, 5, 1)" data-bs-toggle="modal"
                                            data-bs-target="#content_{{ $article['id'] }}">Lebih lanjut</a>
                                    </div>

                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

    <div class="mb-2 fw-bold text-center text-black">&copy; 2024 PORTALGANK | VIOLENCE-FREE FIGHTERS</div>

    @include('components.article-modal')
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
