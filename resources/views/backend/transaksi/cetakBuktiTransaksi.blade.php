<!DOCTYPE html>
<html>
<head>
  <title>Cetak Surat </title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered" style="border-bottom-color: black; border-bottom-style: solid;border-bottom-width: 3px;border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;">
  <tr>
    <td width="14" align="left" style="border: none;"><img src="{{ asset ('lpd.jpg')}}" width="130"></td>
    <td style="border: none;" align="left">
          <br><b style="font-size:16px;">LPD Desa Pekraman Tojan</b>
          <h4>BH.0000.000/XXXX/2010</h4>
          <h5>Jl. Raya Tojan</h5>
          <h5>Phone / Fax : (0361)12345678 /-</h5>
    </td>
</table>
<input type="hidden" name="id" id="id" value="{{$transaksi->id}}">
<table class="table table-bordered" style="border:none;">
  <tr>
    <td style="border: none;">
      <center>
        <h4><b style="font-size:16px;">Bukti Transaksi</b></h4>
      </center>
    </td>
  </tr>
</table>
<div class="container" style="width:80%;">
  <table class="table table-bordered" style="border:none;">
    <tr>

      <td style="border:none;"><p>Jenis Transaksi : Peminjaman </p>
      No Transaksi  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$transaksi->id}}<br>

      <td style="border:none;">
        <center>
          Kepada
          <br>Yth : Bapak / Ibu
          <br>Nama Lengkap &nbsp;&nbsp;: {{$transaksi->User->nama}} </td>
        </center>
      </td>
    </tr>
  </table>
</div>
<table class="table table-bordered" style="border-top-color: black; border-top-style: solid;border-top-width: 3px;border-bottom-width: 0px;border-left-width: 0px;border-right-width: 0px; border-top:3px dashed;">
  <tr>
    <td style="border:none;" ></td>
  </tr>
</table>
<div class="container" style="width:80%;">
  <table class="table table-bordered" style="border:none;">
    <tr>
      <td style="border:none;"></td>
      <td style="border:none;"></td>
      <td style="border:none;"><p>Mengetahui</p>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
      <td style="border:none;">
        <center>
          Peminjam
          <br>Yth : Bapak / Ibu
        </center>
      </td>
    </tr>
  </table>
  <table class="table table-bordered" style="border:none;">
    <tr>
      <td style="border:none;"></td>
      <td style="border:none;"></td>

      <td style="border:none;"><p>..................................</p>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>
        <td style="border:none;"></td>

        <td style="border:none;"><p>.................................</p></td>
    </tr>
  </table>
</div>
</body>
</html>
