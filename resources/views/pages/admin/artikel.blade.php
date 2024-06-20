@extends('layouts.admin-layout')

@section('content')
    <div class="page-content" style="margin-top: 12vh; margin-left: 240px">
        <div class="container">

            <div class="d-flex">
                <h3 class="fw-bolder me-2 align-self-center mt-5">Artikel</h3>
                <div class="align-self-center">
                    <a href="{{ route('artikel-new') }}" class="btn bg-primary text-white fw-bolder ms-2 mt-5">+ Artikel
                        baru</a>
                </div>
            </div>


            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides mt-4">
                        @foreach ($articles as $article)
                            <li class="glide__slide">
                                <div class="card border border-2" style="width: 22rem;">
                                    <img src="{{ asset("storage/img/{$article['image']}") }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-5 fw-bolder">{{ $article['title'] }}</h5>
                                        <div class="d-flex justify-content-end">
                                            <a href="#" class="btn bg-primary text-white fw-bolder"
                                                data-bs-toggle="modal" data-bs-target="#content_{{ $article['id'] }}">More</a>
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
            gap: 5
        })

        glide.mount()
    </script>
@endsection
