<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="text-center mt-5">
        <h2>Login Aplikasi</h2>
        <p>Silahkan masuk menggunakan akun yang sudah anda daftarkan</p>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{ route('login.submit') }}" method="post">
                            @csrf
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control mb-2" value="{{ old('email') }}" required>
                            <label>Password</label>
                            <input type="text" name="password" class="form-control mb-2">
                            <button class="btn btn-primary">Login</button>
                        </form>

                        @if(session('gagal'))
                        <p class="text-danger">{{ session('gagal') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>