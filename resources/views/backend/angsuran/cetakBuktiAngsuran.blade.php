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
    <td width="14" align="left" style="border: none;"><img src="{{ asset ('lpd.jpg')}}" width="80"></td>
    <td style="border: none;" align="left">
      <b style="font-size:16px;">LPD Desa Pekraman Tojan</b>
          <h5>BH.0000.000/XXXX/2010</h4>
          <h6>Jl. Raya Tojan</h5>
          <h6>Phone / Fax : (0361)12345678 /-</h5>
    </td>
</table>
<input type="hidden" name="id" id="id" value="{{$angsuran->id}}">
<table class="table table-bordered" style="border:none;">
  <tr>
    <td style="border: none;">
      <center>
        <h4><b style="font-size:16px;">Bukti Pembayaran Angsuran</b></h4>
      </center>
    </td>
  </tr>
</table>
<div class="container" style="width:80%;">
  <table class="table table-bordered" style="border:none;">
    <tr>
      <td style="border:none;">
      No Transaksi  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$angsuran->transaksi_id}}<br>
      Tanggal Pembayaran :{{$angsuran->tanggal_pembayaran}}
      <td style="border:none;">

          Pembayaran Pokok &nbsp; : {{ number_format($angsuran->sisa_kredit,2) }}
          <br>pembayaran Bunga &nbsp;&nbsp;: {{ number_format($angsuran->pembayaran_bunga,2)}}
          <br>Biaya Materai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ number_format($angsuran->transaksi->biaya_materai,2)}}
          <br>Biaya Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ number_format($angsuran->transaksi->biaya_admin,2)}}
          <hr>
          Total Pembayaran &nbsp;: {{ number_format($angsuran->jumlah_pembayaran,2)}}

      </td>
    </tr>
  </table>
</div>
<table class="table table-bordered" style="border-top-color: black; border-top-style: solid;border-top-width: 3px;border-bottom-width: 0px;border-left-width: 0px;border-right-width: 0px; border-top:3px dashed;">
  <tr style="border:none;">
    <td style="border:none"></td>
  </tr>
</table>
</body>
</html>
