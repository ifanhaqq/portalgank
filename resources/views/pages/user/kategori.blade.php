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
                <div class="glide" style="margin-left: 10vh">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($articles as $article)
                                <li class="glide__slide">
                                    <div class="card" style="width: 22rem;">
                                        <img src="{{ asset("storage/img/{$article['image']}") }}"
                                            class="card-img-top border-danger" alt="..."
                                            style="border: 4px solid rgba(120, 5, 5, 1)">
                                        <div class="card-body text-white" style="background-color: black">
                                            <h5 class="card-title mb-5 fw-bolder">{{ $article['title'] }}</h5>
                                            <p class="card-text text-truncate mb-5">{{ $article['content'] }}</p>
                                            <div class="d-flex justify-content-end">
                                                <a href="#" class="btn bg-primary text-white fw-bolder"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#content_{{ $article['id'] }}">More</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            @endforeach

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

    @foreach ($articles as $article)
        <div class="modal modal-lg fade" id="content_{{ $article['id'] }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-5">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title fw-bolder"></h5>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset("storage/img/{$article['image']}") }}" alt="" style="width: 500px">
                        </div>
                        <div class="d-flex justify-content-center mt-5">
                            <div class="col-10">
                                <h5 class="fw-bold">{{ $article['title'] }}</h5>

                                <p class="text-black">{{ $article['content'] }}</p>
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
    @endforeach
@endsection

@section('scripts')
    <script>
        var glide = new Glide('.glide', {
            type: 'carousel',
            perView: 3,
            gap: 0
        })

        glide.mount()
    </script>
@endsection
