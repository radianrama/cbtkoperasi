@extends('layouts.main')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Simpanan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('simpanan.create') }}">Silahkan Isi Untuk Melakukan Simpanan</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            
            <th>Id Simpanan</th>
            <th>Id Anggota</th>
            <th>Tanggal Simpanan</th>
            <th>Simpanan</th>
            <th>Jumlah Simpanan</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($simpanans as $simpanan)
        <tr>
            <td>S00{{ $simpanan->id_simpanan }}</td>
            <td>P00{{ $simpanan->id_anggota }}</td>
            <td>{{ $simpanan->tgl_simpanan }}</td>
            <td>{{ $simpanan->simpanan }}</td>
            <td>{{ $simpanan->jml_simpanan }}</td>
            <td>
                <form action="{{ route('simpanan.destroy',$simpanan->id_simpanan) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('simpanan.edit',$simpanan->id_simpanan) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $anggotas->links() !!}
      
@endsection