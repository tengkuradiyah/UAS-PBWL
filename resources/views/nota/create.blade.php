@extends('layouts.app')

@section('content')<div class="container">

<h3>Tambah Data Nota</h3>
 <form action="{{ url('/nota') }}" method="POST">
@csrf

 <div class="mb-3">
 <label>TANGGAL INPUT</label>
<input type="text" class="form-control"name="nota_tanggalinput">
</div>
<div class="mb-3">
<label>TANGGAL UPDATE</label>
 <input type="text" class="form-control"name="nota_tanggalupdate">
</div>

<div class="mb-3">
<input type="submit" value="SIMPAN">
</div>
</form>
</div>
@endsection