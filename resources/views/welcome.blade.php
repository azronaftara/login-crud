<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Laravel Project</title>
</head>
<body>
    <div class="text-center mt-4">
        <h1>Selamat datang di Aplikasi CRUD Laravel 11</h1>
        <form action="{{ route('siswa.tampil') }}" method="GET">
            <button type="submit" class="btn btn-primary">Lihat Siswa</button>
        </form>
    </div>
</body>
</html>