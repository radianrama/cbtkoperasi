@extends('layouts.main') @section('content')
<div class="form-control">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Laporan</h2>
            <form action="/laporans/cari" method="post">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <input
                            type="date"
                            class="form-control @error('startDate') is-invalid @enderror mb-3"
                            name="startDate"
                            id="startDate">
                        @error('starDate')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-auto">
                        <label class="col-sm-2 mb-3">
                            <b>-</b>
                        </label>
                    </div>
                    <div class="col-auto">
                        <input
                            type="date"
                            class="form-contorl @error('endDate')is-invalid @enderror mb-3"
                            name="endDate"
                            id="endDate">
                        @error('endDate')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Cari</button>
                        @php if(isset($startDate) && isset($endDate)){ @endphp
                        <a
                            href="{{ route('laporans.print', ['startDate' => $startDate, 'endDate' => $endDate]) }}"
                            class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php }else{ @endphp
                        <a href="{{ route('laporans.print') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php } @endphp
                    </div>
                </div>
            </form>
            </div>
        </div>

<table class="table table-bordered">
    <tr>

            <th>Id Simpanan</th>
            <th>Id Anggota</th>
            <th>Tanggal Simpanan</th>
            <th>Simpanan</th>
            <th>Jumlah Simpanan</th>

    </tr>
    @foreach ($simpanans as $simpanan)
    <tr>

            <td>S00{{ $simpanan->id_simpanan }}</td>
            <td>P00{{ $simpanan->id_anggota }}</td>
            <td>{{ $simpanan->tgl_simpanan }}</td>
            <td>{{ $simpanan->simpanan }}</td>
            <td>{{ $simpanan->jml_simpanan }}</td>

    </tr>
    @endforeach
</table>

@endsection