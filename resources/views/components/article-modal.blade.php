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
