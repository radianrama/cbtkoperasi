@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Simpanan</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('simpanan.index') }}"> Back</a>
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

<form action="{{ route('simpanan.store') }}" method="POST">
    @csrf

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Simpanan : </strong>
                <input type="text" name="id_simpanan" class="form-control" placeholder="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Anggota : </strong>
                <input type="text" name="id_anggota" class="form-control" placeholder="">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Simpanan : </strong>
                <input type="date" name="tgl_simpanan" class="form-control" placeholder="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Simpanan : </strong>
                <input type="text" name="simpanan" class="form-control" placeholder="" id="simpanan" onChange="can()">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Simpanan : </strong>
                <input  name="jml_simpanan" class="form-control" placeholder="" id="jumlah" readonly="readonly">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    
        <script>
    function can(){
        const pinjaman = document.getElementById('simpanan').value;
        document.getElementById('jumlah').value = pinjaman;
    }
    
    

    
    
    
    </script>

    </form>
    @endsection