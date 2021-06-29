@extends('layouts.main')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pinjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pinjaman.create') }}">Silahkan Isi Untuk Melakukan Pinjaman</a>
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
            
            <th>Id Pinjaman</th>
            <th>Id Anggota</th>
            <th>Tanggal Pinjaman</th>
            <th>Pinjaman</th>
            <th>Jumlah Pinjaman</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($pinjamen as $pinjaman)
        <tr>
            <td>J00{{ $pinjaman->id_pinjaman }}</td>
            <td>P00{{ $pinjaman->id_anggota }}</td>
            <td>{{ $pinjaman->tgl_pinjaman }}</td>
            <td>{{ $pinjaman->pinjaman }}</td>
            <td>{{ $pinjaman->jml_pinjaman }}</td>
            <td>
                <form action="{{ route('pinjaman.destroy',$pinjaman->id_pinjaman) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('pinjaman.edit',$pinjaman->id_pinjaman) }}">Edit</a>
   
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