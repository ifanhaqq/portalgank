<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('../style.css') }}" rel="stylesheet" type="text/css">
    <title>PORTALGANK</title>
</head>

<body>
    <div class="bg-peoples d-flex justify-content-center" style="height: 100vh; background-color: black;">
        <div class="guest-box align-self-center d-flex justify-content-between flex-column">
            <div class="d-flex justify-content-center flex-column mt-4">
                <div class="col-11 bg-black rounded align-self-center">
                    <h1 class="text-white text-center mt-2 fw-bold">DAFTAR</h1>
                </div>
                <div class="col-11 align-self-center text-black fw-bold mt-4">
                    <form>
                        <div class="mb-1">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="txt" class="form-control rounded-pill border border-3 border-dark"
                                id="" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-pill border border-3 border-dark"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-1">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-pill border border-3 border-dark mb-2"
                                id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text d-flex justify-content-between">
                                <a href="{{ route('login') }}">Sudah punya akun?</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-primary rounded-pill bg-black">
                                <h5 class="fw-bold mt-2 me-3 ms-3">DAFTAR</h5>
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</body>

</html>
