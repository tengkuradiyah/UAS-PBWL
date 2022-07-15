@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Barang
    <a class="btn btn-primary btn-sm float-end" href="{{ url('barang/create') }}">
        Tambah Data</a>
    </h3>
    <br>
    <table class="table table-bordered table-hover border-dark text-center">
        <tr class="fw-bold table-active">
            <td>NAMA BARANG</td>
            <td>MEREK BARANG</td>
            <td>HARGA BELI BARANG</td>
            <td>HARGA JUAL BARANG</td>
            <td>SATUAN BARANG</td>
            <td>STOK BARANG</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr class="fw-semibold">
            <td>{{ $row->barang_nama}}</td>
            <td>{{ $row->barang_merek }}</td>
            <td>{{ $row->barang_hrgbeli }}</td>
            <td>{{ $row->barang_hrgjual }}</td>
            <td>{{ $row->barang_satuan}}</td>
            <td>{{ $row->barang_stok }}</td>
            <td><a href="{{ url('barang/' . $row->barang_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('barang/' . $row->barang_id) }}" method="POST">
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