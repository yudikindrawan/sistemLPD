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
        <td width="14" align="left" style="border: none;"><img src="lpd2.png" width="500%"></td>
        <td style="border: none;">
        <center>
            <b style="font-size:18px;">LPD Desa Pekraman Tojan</b>
            <br><b style="font-size:12px;">Jl. Raya Tojan, No 184, Pering, Blahbatuh Gianyar Bali 80581</b>
            <br><b style="font-size:12px;">Tlp : (0361) 264322</b>
        </center>
    </td>
    <td width="15" align="right" style="border: none;"><img src="lpd2.png" width="500%"></td>
    </tr>
</table>
<table class="table table-bordered" style="border:none;">
    <tr>
        <td style="border: none;">
        <center>
            <b style="font-size:16px;">LAPORAN DEBITUR</b>
            <br><b style="font-size:16px;">Periode : {{$awal}}/{{$akhir}}</b>
        </center>
        </td>
    </tr>
</table>
<div class="box-body table-responsive">
    <table id="example" class="table table-bordered">
        <thead>
            <tr>
              <th>Nama</th>
              <th>No KTP</th>
              <th>Tanggal Lahir</th>
              <th>Email</th>
              <th>No Telp</th>
              <th>pekerjaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deb as $deb)
            <tr>
                <td>{{$deb->nama}}</td>
                <td>{{$deb->no_ktp}}</td>
                <td>{{$deb->tanggal_lahir}}</td>
                <td>{{$deb->email}}</td>
                <td>{{$deb->no_telp}}</td>
                <td>{{$deb->pekerjaan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
