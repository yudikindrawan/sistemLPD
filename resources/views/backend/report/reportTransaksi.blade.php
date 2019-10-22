<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Produk</title>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered" style="border-bottom-color: black; border-bottom-style: solid;border-bottom-width: 3px;border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;">
    <tr>
        <td width="14" align="left" style="border: none;"><img src="./assets/images/artilogo.png" width="500%"></td>
        <td style="border: none;">
        <center>
            <b style="font-size:18px;">LPD Desa Pekraman Tojan</b>
            <br><b style="font-size:12px;">Jl. Raya Tojan, No 184, Pering, Blahbatuh Gianyar Bali 80581</b>
            <br><b style="font-size:12px;">Tlp : (0361) 264322</b>
        </center>
    </td>
    <td width="15" align="right" style="border: none;"><img src="./assets/images/artilogo.png" width="500%"></td>
    </tr>
</table>
<table class="table table-bordered" style="border:none;">
    <tr>
        <td style="border: none;">
        <center>
            <b style="font-size:16px;">LAPORAN Transaksi</b>
            <br><b style="font-size:16px;">Periode : </b>
        </center>
        </td>
    </tr>
</table>
<div class="box-body table-responsive">
    <table id="example" class="table table-bordered">
        <thead>
            <tr>
                <th>No Transaksi</th>
                <th>Nama</th>
                {{-- <th>Tanggal</th> --}}
                <th>Jumlah Kredit</th>
                <th>Pokok</th>
                <th>Bunga</th>
                <th>Jangka Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trans as $transaksi)
            <tr>
                <td>{{$transaksi->id}}</td>
                <td>{{$transaksi->nama}}</td>
                {{-- <td>{{$transaksi->tanggal_kredit}}</td> --}}
                <td>{{$transaksi->jumlah_kredit}}</td>
                <td>{{$transaksi->angsuran_pokok}}</td>
                <td>{{$transaksi->biaya_bunga}}</td>
                <td>{{$transaksi->jangka_waktu}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>