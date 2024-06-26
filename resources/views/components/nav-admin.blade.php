<div class="d-flex flex-column flex-shrink-0 p-3 text-white"
    style="width: 130px; height: 88vh; background-color: rgba(120, 5, 5, 1); position: fixed">

    <h5 class="text-center fw-bold mt-3">LAPORAN</h5>
    <hr>

    <div class="d-flex justify-content-center mt-4">
        <div class="d-flex flex-column">
            <a href="{{ route('get-reports') }}" class="text-white">
                <img class="align-self-center" src="{{ asset('img/laporan-semua.png') }}" alt=""
                    style="width: 65px">
                <P class="fw-bold align-self-center mt-2">SEMUA</P>
            </a>

        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <div class="d-flex flex-column">
            <a href="{{ route('get-tinjau-reports') }}" class="text-white">
                <img class="align-self-center" src="{{ asset('img/laporan-tinjau.png') }}" alt=""
                    style="width: 65px">
                <P class="fw-bold align-self-center mt-2">TINJAU</P>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <div class="d-flex flex-column">
            <a href="{{ route('get-proses-reports') }}" class="text-white">
                <img class="align-self-center" src="{{ asset('img/laporan-proses.png') }}" alt=""
                    style="width: 65px">
                <P class="fw-bold align-self-center mt-2">PROSES</P>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <div class="d-flex flex-column">
            <a href="{{ route('get-selesai-reports') }}" class="text-white">
                <img class="align-self-center" src="{{ asset('img/laporan-selesai.png') }}" alt=""
                    style="width: 65px">
                <P class="fw-bold align-self-center mt-2">SELESAI</P>
            </a>
        </div>
    </div>


</div>
