<nav class="navbar navbar-expand-lg fixed-top" style="height: 12vh; background-color: black">
    <div class="container-fluid d-flex justify-content-between">
        <img class="align-self-center" src="{{ asset('img/portal-gank.png') }}" alt="people" style="height: 60px">
        <div class=" d-flex fw-bold">
            <div class="ms-4 me-4">
                <button class="btn border border-white border-2 rounded-pill" id="masuk-btn"><a href="{{ route('dashboard') }}"
                        class="text-white fw-bold"><em>Dashboard</em></a></button>
            </div>
            <div class="ms-4 me-4">
                <button class="btn border border-white border-2 rounded-pill" id="masuk-btn"><a href=""
                        class="text-white fw-bold"><em>Laporan</em></a></button>
            </div>
            <div class="ms-4 me-4">
                <button class="btn border border-white border-2 rounded-pill" id="masuk-btn"><a href="{{ route('artikel') }}"
                        class="text-white fw-bold"><em>Artikel</em></a></button>
            </div>
        </div>
        <div class="d-flex justify-content-end me-3" id="profile">
            <img src="{{ asset('img/people-icon.png') }}" alt="people" style="height: 40px">
        </div>
    </div>
</nav>
