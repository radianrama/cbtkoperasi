@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Daftar Anggota</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('anggota.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/anggota/{{$data->id_anggota}}/update" method="post">
    @csrf

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID anggota : </strong>
                <input type="text" name="id_anggota" class="form-control" value = "{{$data->id_anggota}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama : </strong>
                <input type="text" name="nama" class="form-control" value = "{{$data->nama}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Gabung : </strong>
                <input type="date" name="tgl_gabung" class="form-control" value = "{{$data->tgl_gabung}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Telepon : </strong>
                <input type="text" name="telp" class="form-control" value = "{{$data->telp}}">
            </div>
        </div>
    

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin : </strong>
                <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki <br>
                <input type="radio" name="jenis_kelamin" value="perempuan">perempuan <br>
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kota : </strong>
                <input type="text" name="kota" class="form-control" value = "{{$data->kota}}">
            </div>
        </div>
    
    
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir : </strong>
                <input type="date" name="tgl_lahir" class="form-control" value = "{{$data->tgl_lahir}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan : </strong>
                <input type="text" name="pekerjaan" class="form-control" value = "{{$data->pekerjaan}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat : </strong>
                <textarea name="alamat" id="" cols="30" rows="10">{{$data->alamat}}</textarea>
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="update" value = "Update" class="btn btn-primary">
        </div>

</form>
@endsection