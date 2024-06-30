@extends('layouts.landing-page-layout')

@section('content')
    <div class="bg-peoples" style="background-color: black; margin-top: 12vh; height: 88vh; padding-top: 5vh">
        <div class="container text-center">
            <div style="background-color: rgba(120, 6, 6, 0.7); height: 75vh; border-radius: 1%">
                {{-- <h4 class="ms-5"><span class="bg-white rounded-pill" style="padding: 8px">About us</span></h4> --}}
                <img src="../img/about-us-vektor.png" alt="" width="20%" class="mt-5 mb-3">
                <hr style="margin: auto; color: #FFFFFF" width="50%" size="2" noshade>
                <h6 class="font-1 text-white mt-5 text-align-center" style="margin: 10%" width="50%">
                    PORTALGANK (Platform Digital Pencegahan dan Penanganan Kekerasan) merupakan
                    platform yang digunakan untuk menjembatani instansi pemerintahan dan karyawannya (G2E) dalam upaya
                    proses pencegahan dan penanangan kekerasan yang ada di dalam instansi tersebut.<br><br>
                    Platform ini dapat membantu SATGAS PPKS yang ada di instansi instansi pemerintahan tersebut dalam
                    menjalankan tugasnya secara lebih maksimal.<br><br>
                    Dengan adanya platform ini juga instansi pemerintahan tidak perlu membuat sistem pelaporannya sendiri.

                </h6>
                <a href="#">
                    <h6 class="bi bi-instagram bi bi-email text-white">
                        MORE ABOUT US
                    </h6>
                </a>
            </div>
        </div>
    </div>
@endsection
