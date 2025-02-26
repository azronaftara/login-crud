<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Registrasi</title>
</head>
<body>
    <div class="text-center mt-5">
        <h2>Registrasi Aplikasi</h2>
        <p>Silahkan isi formulir Registrasi berikut ini!</p>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{ route('registrasi.submit') }}" method="post">
                            @csrf
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control mb-2">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control mb-2">
                            <button class="btn btn-primary">Submit Registrasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>