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
            <div class="d-flex justify-content-center mt-4">
                <div class="col-11 bg-black rounded">
                    <h1 class="text-white text-center mt-2 fw-bold">Selamat Datang</h1>
                </div>
            </div>

            <h2 class="text-center mt-5 mb-5">Siapa anda?</h2>

            <div class="d-flex justify-content-center mb-4">
                <button class="btn btn-dark me-2"><a href="{{ route('login') }}"><h3 class="ms-4 me-4 text-white">SATGAS</h3></a></button>
                <button class="btn btn-danger ms-2"><h3>PENGGUNA</h3></button>
            </div>

        </div>
    </div>
</body>

</html>
