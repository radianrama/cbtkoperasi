@extends('layouts.main')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Anggota</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('anggota.create') }}"> Daftar Anggota Baru</a>
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
            
            <th>Id Anggota</th>
            <th>Nama</th>
            <th>Tanggal Gabung</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
            <th>Kota</th>
            <th>Tanggal Lahir</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($anggotas as $anggota)
        <tr>
            <td>P00{{ $anggota->id_anggota }}</td>
            <td>{{ $anggota->nama }}</td>
            <td>{{ $anggota->tgl_gabung }}</td>
            <td>{{ $anggota->telp }}</td>
            <td>{{ $anggota->jenis_kelamin }}</td>
            <td>{{ $anggota->kota }}</td>
            <td>{{ $anggota->tgl_lahir }}</td>
            <td>{{ $anggota->pekerjaan }}</td>
            <td>{{ $anggota->alamat }}</td>
            <td>
                <form action="{{ route('anggota.destroy',$anggota->id_anggota) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('anggota.edit',$anggota->id_anggota) }}">Edit</a>
   
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