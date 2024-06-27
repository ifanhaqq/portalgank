<div class="d-flex flex-column flex-shrink-0 p-3 text-white"
    style="width: 130px; height: 88vh; background-color: rgba(120, 5, 5, 1); position: fixed">

    <h6 class="text-center fw-bold mt-3">LAPORAN</h6>
    <hr>

    <div class="d-flex justify-content-center mt-2">
        <div class="d-flex flex-column">
            <a href="{{ route('get-reports') }}" class="text-white" >
                <div class="bi bi-file-earmark-person-fill icon-large"></div>
                <P class="fw-bold align-self-center mt-2">SEMUA</P>
            </a>
            
        </div>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <div class="d-flex flex-column">
            <a href="{{ route('get-tinjau-reports') }}" class="text-white">
                <div class="bi bi-eye icon-large"></div>
                <P class="fw-bold align-self-center mt-2">TINJAU</P>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <div class="d-flex flex-column">
            <a href="{{ route('get-proses-reports') }}" class="text-white">
                <div class="bi bi-arrow-repeat icon-large"></div>
                <P class="fw-bold align-self-center mt-2">PROSES</P>
            </a>
            
        </div>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <div class="d-flex flex-column">
            <a href="{{ route('get-selesai-reports') }}" class="text-white">
                <div class="bi bi-person-check icon-large"></div>
                <P class="fw-bold align-self-center mt-2">SELESAI</P>
            </a>
        </div>
    </div>


</div>
