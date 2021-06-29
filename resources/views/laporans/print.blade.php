<!DOCTYPE html>
<html>
    <head>
        <title>Laporan</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }} ">
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
            rel="stylesheet">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>
    <body onafterprint="redirect()">
        <br>
        @php if(isset($startDate) && isset($endDate)){ @endphp
        <h2 style="margin-left: 1%;">Laporan Kejadian: @php echo $startDate @endphp sampai @php echo $endDate @endphp</h2>
        @php }else{ @endphp
        <h2>
            <center>Laporan Kejadian</center>
        </h2>
        @php } @endphp
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Kejadian</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kode Kasus</th>
                        <th scope="col">Nama Kasus</th>
                        <th scope="col">poin</th>
                        <th scope="col">tanggal</th>
                        <th scope="col">Saksi</th>
                    </tr>
                </thead>
                @foreach ($kejadians as $kejadian)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $kejadian->kode_kejadian }}</td>
                    <td>{{ $kejadian->nis }}</td>
                    <td>{{ $kejadian->nama }}</td>
                    <td>{{ $kejadian->kode_kasus }}</td>
                    <td>{{ $kejadian->nama_kasus }}</td>
                    <td>{{ $kejadian->poin }}</td>
                    <td>{{ $kejadian->tanggal }}</td>
                    <td>{{ $kejadian->saksi }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>

    <h6 align="right">
        @php $tgl=date('d-m-Y'); @endphp Bogor,{{$tgl}}
    </br>
    Kepala Pendidikan SMK WIKRAMA INDONESIA
</h6>
</br>
</br>
</br>
</br>
</br>

<h6 align="right">
Prof Abdul Hilman Thiusana

</h6>
<script type="text/javascript">
window.print();
</script>

<script type="text/javascript">
function redirect() {
window.location.href = '@php echo $redirect; @endphp';
}
</script>
</html>