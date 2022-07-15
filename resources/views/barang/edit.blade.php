@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Barang</h3>
        <form action="{{ url('/barang/' . $row->barang_id) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>NAMA BARANG</label>
                    <input type="text" class="form-control" name="barang_nama" value="{{ $row->barang_nama }}"></>
                </div>
                <div class="mb-3">
                    <label>MEREK BARANG</label>
                    <input type="text" class="form-control" name="barang_merek" value="{{ $row->barang_merek }}"></>
                </div>
                <div class="mb-3">
                    <label>HARGA BELI BARANG</label>
                    <input type="text" class="form-control" name="barang_hrgbeli" value="{{ $row->barang_hrgbeli }}"></>
                </div>
                <div class="mb-3">
                    <label>HARGA JUAL BARANG</label>
                    <input type="text" class="form-control" name="barang_hrgjual" value="{{ $row->barang_hrgjual}}"></>
                </div>
                <div class="mb-3">
                    <label>SATUAN BARANG</label>
                    <input type="text" class="form-control" name="barang_satuan" value="{{ $row->barang_satuan }}"></>
                </div>
                <div class="mb-3">
                    <label>STOK BARANG</label>
                    <input type="text" class="form-control" name="barang_stok" value="{{ $row->barang_stok }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('barang /') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection