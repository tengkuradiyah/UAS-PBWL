@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Nota</h3>
        <form action="{{ url('/nota/' . $row->nota_tanggalinput) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>TANGGAL INPUT</label>
                    <input type="text" class="form-control" name="nota_tanggalinput" value="{{ $row->nota_tanggalinput }}"></>
                </div>
                <div class="mb-3">
                    <label>TANGGAL UPDATE</label>
                    <input type="text" class="form-control" name="nota_tanggalupdate" value="{{ $row->nota_tanggalupdate }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('nota/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection