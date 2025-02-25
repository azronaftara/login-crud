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
        {{-- <th>Jenis Kelamin</th> --}}
        <th>No HP</th>
        <th>Hobi</th>
        <th>Aksi</th>
    </tr>
    @foreach ($siswa as $no=>$data)
    <tr>
        <th>{{ $no+1 }}</th>
        <th>{{ $data->nis }}</th>
        <th>{{ $data->nama }}</th>
        <th>{{ $data->alamat }}</th>
        {{-- <th>{{ $data->jenis_kelamin }}</th> --}}
        <th>{{ $data->no_hp }}</th>
        <th>{{ $data->hobi }}</th>
        <td>
            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection