@extends('layouts.app') 
 
 @section('content') 
 
<div class="container"> 
<h3>NOTA
    <a class="btn btn-primary btn-sm float-end" href="{{ url('nota/create') }}">
        Tambah Data</a>
    </h3>
 
<table class="table table-bordered"> 
    <tr> 
        <td>TANGGAL INPUT</td> 
        <td>TANGGAL UPDATE</td>
        <td>EDIT</td>
        <td>DELETE</td>  
    </tr> 
    @foreach($rows as $row)
    

<tr> 
    <td>{{ $row->nota_tanggalinput }}</td> 
    <td>{{ $row->nota_tanggalupdate }}</td> 
    <td><a href="{{ url('nota/' . $row->nota_tanggalinput . '/edit') }}" class="btn btn-warning">Edit</a></td>


            <td>
                <form action="{{ url('nota/' . $row->nota_id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-danger">Hapus</button>
                </form>
            </td>
</tr> 
@endforeach 
 </table> 
</div> 

@endsection 