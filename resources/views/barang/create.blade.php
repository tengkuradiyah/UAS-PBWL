@extends('layouts.app')

@section('content')<div class="container">

<h3>Tambah Data Barang</h3>
 <form action="{{ url('/barang') }}" method="POST">
@csrf

 <div class="mb-3">
 <label>NAMA BARANG</label>
<input type="text" class="form-control"name="barang_nama">
</div>
<div class="mb-3">
<label>MEREK BARANG</label>
 <input type="text" class="form-control"name="barang_merek">
</div>
<div class="mb-3">
 <label>HARGA BELI BARANG</label>
<input type="text" class="form-control"name="barang_hrgbeli">
</div>
<div class="mb-3">
 <label>HARGA JUAL BARANG</label>
<input type="text" class="form-control"name="barang_hrgjual">
</div>
<div class="mb-3">
 <label>SATUAN BARANG</label>
<input type="text" class="form-control"name="barang_satuan">
</div>
<div class="mb-3">
 <label>STOK BARANG</label>
<input type="text" class="form-control"name="barang_stok">
</div>

<div class="mb-3">
<input type="submit" value="SIMPAN">
</div>
</form>
</div>
@endsection