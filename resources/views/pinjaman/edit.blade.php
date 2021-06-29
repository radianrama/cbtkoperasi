@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Pinjaman</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pinjaman.index') }}"> Back</a>
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

<form action="/pinjaman/{{$data->id_pinjaman}}/update" method="POST">
    @csrf

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Pinjaman : </strong>
                <input type="text" name="id_pinjaman" class="form-control" value="{{$data->id_pinjaman}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Anggota : </strong>
                <input type="text" name="id_anggota" class="form-control" value="{{$data->id_anggota}}">
            </div>
        </div>

        
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pinjaman : </strong>
                <input type="date" name="tgl_pinjaman" class="form-control" value="{{$data->tgl_pinjaman}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pinjaman : </strong>
                <input type="text" name="pinjaman" class="form-control" value="{{$data->pinjaman}}" id="pinjaman" onChange="bisa()">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Pinjaman : </strong>
                <input name="jml_pinjaman" class="form-control" value="{{$data->jml_pinjaman}}" id="jumlah" readonly="readonly">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="update" class="btn btn-primary">UPDATE</button>
        </div>
    


        <script>
    function bisa(){
        const pinjaman = document.getElementById('pinjaman').value;
        document.getElementById('jumlah').value = pinjaman;
    }
    
    

    
    
    
    </script>
    </form>
    @endsection