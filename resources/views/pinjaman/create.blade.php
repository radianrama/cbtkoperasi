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

<form action="{{ route('pinjaman.store') }}" method="POST">
    @csrf

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Pinjaman : </strong>
                <input type="text" name="id_pinjaman" class="form-control" placeholder="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Anggota : </strong>
                <input type="text" name="id_anggota" class="form-control" placeholder="">
            </div>
        </div>

        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
           <label for="exampleInputEmail1">Nama Anggota</label>
                <select name="id_anggota" >
                @foreach($anggotas as $data )
                <option value="{{$data ->id_anggota}}">{{$data ->nama}}</option>
           </select>
           @endforeach
        </div> -->
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pinjaman : </strong>
                <input type="date" name="tgl_pinjaman" class="form-control" placeholder="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pinjaman : </strong>
                <input type="text" name="pinjaman" class="form-control" placeholder="" id="pinjaman" onChange="bisa()">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Pinjaman : </strong>
                <input  name="jml_pinjaman" class="form-control" placeholder="" id="jumlah" readonly = "readonly">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    
    </form>

    <script>
    function bisa(){
        const pinjaman = document.getElementById('pinjaman').value;
        document.getElementById('jumlah').value = pinjaman;
    }
    </script>
    @endsection