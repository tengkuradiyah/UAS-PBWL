@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Kategori
    <a class="btn btn-primary btn-sm float-end" href="{{ url('kategori/create') }}">
        Tambah Data</a>
    </h3>
    <br>
    <table class="table table-bordered table-hover border-dark text-center">
        <tr class="fw-bold table-active">
            <td>NAMA KATEGORI</td>
            <td>TANGGAL INPUT KATEGORI</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr class="fw-semibold">
            <td>{{ $row->kategori_nama}}</td>
            <td>{{ $row->kategori_tanggalinput }}</td>
            <td><a href="{{ url('kategori/' . $row->kategori_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('kategori/' . $row->kategori_id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection