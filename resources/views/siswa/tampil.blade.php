@extends('layout')

@section('konten')
<div class="d-flex ">
    <h4>List Siswa</h4>
    <div class="ms-auto">
        <a href="{{ route('siswa.tambah') }}" class="btn btn-success">Tambah Siswa</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Hobi</th>
    </tr>
</table>
@endsection