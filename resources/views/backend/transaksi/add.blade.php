@extends('layouts.master')
@section ('title', 'Data Debitur - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Tambah Transaksi Kredit<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="main-card mb-3 card col-12">
            <div class="card-body">
                <form class="needs-validation" method="post" action="{{ route('transaksi.store') }}" enctype="multipart/form-data" id="myForm" novalidate>
                @csrf
                    <!-- <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">No Transaksi</label>
                        <div class="col-sm-4">
                            <input class="form-control @error('id') is-invalid @enderror" name="id" id="id"  placeholder="No Transaksi" type="text" readonly>
                        </div>
                    </div> -->
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Nama Debitur</label>
                        <div class="col-sm-10">
                            <select name="users_id" id="users_id" class="form-control select2 @error('nama_kreditur') is-invalid @enderror" required>
                                <option selected="selected" value="" disabled>Nama Debitur</option>
                            @foreach($krediturs as $kredit)
                                <option value="{{$kredit->id}}">{{$kredit->nama}}</option>
                            @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Nama Debitur Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('nama_kreditur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal Pencarian</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control custom-select @error('tanggal_kredit') is-invalid @enderror datepicker" name="tanggal_kredit" id="tanggal_kredit" placeholder="mm/dd/yyyy" required >
                            <div class="invalid-feedback">
                                Tanggal Pencarian Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('tanggal_kredit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    {{-- <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-10">
                            <select name="debiturs_id" id="debiturs_id" class="form-control select2 @error('nama_admin') is-invalid @enderror">
                                <option selected="selected" value="" disabled>Pilih User</option>
                            @foreach($transaksis as $transaksi)
                                <option value="{{$transaksi}}">{{$transaksi->nama}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                                @error('nama_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                        <div class="col-sm-10">
                            <input  type="text" onkeypress="return hanyaAngka(event)" placeholder="Masukkan Jumlah Pinjaman" class="form-control @error('jumlah_kredit') is-invalid @enderror jumlah_kredit" name="jumlah_kredit" id="jmlkredit" required>
                            <div class="invalid-feedback">
                                Jumlah Pinjaman Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('jumlah_kredit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label jangka_waktu">Jangka Waktu</label>
                        <div class="col-sm-6">
                        <div class="input-group-append">
                            <input type="text" onkeypress="return hanyaAngka(event)" placeholder="Masukkan Jangka Waktu" class="form-control @error('jangka_waktu') is-invalid @enderror" name="jangka_waktu" id="jnkwaktu" required>
                            <span class="input-group-text">bulan</span>
                            <div class="invalid-feedback">
                                Jangka Waktu Tidak Boleh Kosong
                            </div>
                        </div>
                        </div>
                    </div>
                                @error('jangka_waktu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label bunga">Setting Bunga</label>
                        <div class="col-sm-6">
                            <div class="input-group-prepend">
                                <input type="text" onkeypress="return hanyaAngka(event)" placeholder="Masukkan Bunga" class="form-control @error('bunga') is-invalid @enderror" name="bunga" id="bungas" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                                <div class="invalid-feedback">
                                    Setting Bunga Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                                @error('bunga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label jenis_bunga">Jenis Bunga</label>
                        <div class="col-sm-6">
                            <select name="bunga_id" id="bunga_id" class="form-control select2 @error('jenis_bunga') is-invalid @enderror jenisbunga" required>
                                <option selected="selected" value="" disabled>Pilih Jenis Bunga</option>
                            @foreach($bungas as $bunga)
                                <option value="{{$bunga->id}}">{{$bunga->jenis_bunga}}</option>
                            @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Jenis Bunga Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('jenis_bunga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label bunga">Angsuran Pokok</label>
                        <div class="col-sm-4">
                            <div class="input-group-prepend">
                                <input type="text" onkeypress="return hanyaAngka(event)" placeholder="Angsuran Pokok" class="form-control @error('angsuran_pokok') is-invalid @enderror" name="angsuran_pokok" id="angsuran_pokok" readonly required>
                                <div class="input-group-append">
                                </div>
                                <div class="invalid-feedback">
                                    Angsuran Pokok Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                                @error('angsuran_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label bunga">Biaya bunga</label>
                        <div class="col-sm-4">
                            <div class="input-group-prepend">
                                <input type="text" onkeypress="return hanyaAngka(event)" placeholder="Biaya Bunga" class="form-control @error('biaya_bunga') is-invalid @enderror" name="biaya_bunga" id="biaya_bunga" readonly required>
                                <div class="input-group-append">
                                </div>
                                <div class="invalid-feedback">
                                    Biaya Bunga Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                                @error('angsuran_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label bunga">Biaya Admin</label>
                        <div class="col-sm-4">
                            <div class="input-group-prepend">
                                <input type="text" onkeypress="return hanyaAngka(event)" placeholder="Biaya Admin" class="form-control @error('biaya_admin') is-invalid @enderror" name="biaya_admin" id="biaya_admin" readonly required>
                                <div class="input-group-append">
                                </div>
                                <div class="invalid-feedback">
                                    Biaya Admin Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                                @error('angsuran_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label bunga">Biaya Materai</label>
                        <div class="col-sm-4">
                            <div class="input-group-prepend">
                                <input type="text" onkeypress="return hanyaAngka(event)" placeholder="Biaya Materai" class="form-control @error('biaya_materai') is-invalid @enderror" name="biaya_materai" id="biaya_materai" readonly required>
                                <div class="input-group-append">
                                </div>
                                <div class="invalid-feedback">
                                    Biaya Materai Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                                @error('angsuran_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label bunga">Total Pembayaran</label>
                        <div class="col-sm-4">
                            <div class="input-group-prepend">
                                <input type="text" onkeypress="return hanyaAngka(event)" placeholder="Total Pembayaran" class="form-control @error('total_pembayaran') is-invalid @enderror" name="total" id="total" readonly required>
                                <div class="input-group-append">
                                </div>
                                <div class="invalid-feedback">
                                    Total Pembayaran Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                                @error('angsuran_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div id="biayabunga"></div>
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <!-- <button type="submit" class="btn btn-secondary">Submit</button> -->
                            <input type="submit" class="btn btn-secondary btn-lg" value="Simpan">
                            <button type="button" class="btn btn-primary btn-lg simulasi" id="simulasi">Simulasi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row boxkreditur">
        <div class="main-card mb-3 card col-12">
            <div class="card-body">
                <h5 class="card-title">Data Debitur</h5><hr>
                <table class="table table-hover table-bordered" id="datakreditur">
                    <thead>
                        <th>Jumlah Pinjaman</th>
                        <th>Jenis Bunga</th>
                        <th>Jangka Waktu</th>
                        <th>Bunga</th>
                    </thead>
                    <tbody id="displayArea"> </tbody>
                </table>
                <h3></h3>
                <div id="pokok"><b>Pokok Pinjaman : Rp.</b></div>
                <div id="Jwaktu"><b>Jangka Waktu : Rp.</b></div>
                <div id="Angsuran_perBulan"><b>Biaya Angsuran : Rp.</b></div>
            </div>
        </div>
    </div>
    <div class="row boxangsuran">
        <div class="main-card mb-3 card col-12">
            <div class="card-body">
                <h5 class="card-title">Data Angsuran</h5><hr>
                <table class="table table-hover table-bordered" id="angsuran">
                    <thead>
                        <tr>
                            <th>Bulan Ke-</th>
                            <th>Angsuran Bunga</th>
                            <th>Angsuran Pokok</th>
                            <th>Total Angsuran</th>
                            <th>Sisa Pinjaman</th>
                        </tr>
                    </thead>
                    <tbody id="displaykredit"></tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $("#bunga_id").change(function(){
            var pokokpinjaman = parseFloat($('#jmlkredit').val(), 10);
            var bungakredit = ($('#bungas').val());
            var jangkawaktu = ($('#jnkwaktu').val());
            var biayaAdmin = 2500;
            var biayamaterai = 6000;
            var str= [];
            var parbunga = bungakredit / 100;
            $.each($(".jenisbunga option:selected"), function(){
                str.push($(this).val())
            });
            if (str == 1) {
                // alert("ini" + str.join(", "));
                var total_flat = (pokokpinjaman * parbunga) / jangkawaktu;
                $('#biaya_bunga').val(total_flat);
                $('#biaya_admin').val(biayaAdmin);
                $('#biaya_materai').val(biayamaterai);
            }else if(str == 2){
                a = 0;
                var hitung_bunga = parbunga / jangkawaktu;
                var total_menurun = pokokpinjaman * hitung_bunga;
                $('#biaya_bunga').val(total_menurun);
                $('#biaya_admin').val(biayaAdmin);
                $('#biaya_materai').val(biayamaterai);
            }else{

            }
            var angsuranPokok = ($('#angsuran_pokok').val());
            var biayaBunga = ($('#biaya_bunga').val());
            var Total = (parseInt(angsuranPokok) + parseInt(biayaBunga) + parseInt(biayaAdmin) + parseInt(biayamaterai));
            $('#total').val(Total);
        });
    });

    function getAngsuranPokok(){
        pokokpinjaman = $(document). find('input[name=jumlah_kredit]').val() || 0;
        jangkawaktu = $(document). find('input[name=jangka_waktu]').val() || 0;

        $(document).find('input[name=angsuran_pokok]').val(pokokpinjaman / jangkawaktu);
    }

    $(document).on('input', 'input[name=jangka_waktu]', function() {
        getAngsuranPokok();
    });
    $(document).on('input', 'input[name=jumlah_kredit]', function() {
        getAngsuranPokok();
    });
</script>

<script>
$(document).ready(function(){
    $("#simulasi").click(function(){
        var jmlkredit = parseFloat($('#jmlkredit').val(), 10);
        var bunga = ($('#bungas').val());
        var jnkwaktu = ($('#jnkwaktu').val());
        var periode = $('#tanggal_kredit').val();
        var pokokpinjaman = jmlkredit / jnkwaktu;
        var parsebunga = bunga / 100;
        var angsuranbunga_flat = (jmlkredit * parsebunga) / jnkwaktu;
        var jenis = [];
        $.each($(".jenisbunga option:selected"), function(){
            jenis.push($(this).val())
        });
        if(jenis == 1){
            for (let i = 1; i <= jnkwaktu; i++) {

                var total_angsuranflat = angsuranbunga_flat + pokokpinjaman;
                jmlkredit = jmlkredit - pokokpinjaman;
                $('#displaykredit').append('<tr><td>Bulan ke-' + i + '</td><td>Rp. ' + addCommas(angsuranbunga_flat) + '</td><td>Rp. ' + addCommas(pokokpinjaman) + '</td><td>Rp. ' + addCommas(total_angsuranflat) + '</td><td>Rp. ' + addCommas(jmlkredit) + ' </td></tr>');
            }
        }else if(jenis == 2){
            for (let a = 1; a <= jnkwaktu; a++) {

                kreditEfektif = (jmlkredit - ( a - 1) * pokokpinjaman) * bunga / 12;
                cicilanbulan = pokokpinjaman + kreditEfektif;
                jmlkredit = jmlkredit - cicilanbulan;
                $('#displaykredit').append('<tr><td>Bulan ke-' + a + '</td><td>' + addCommas(kreditEfektif) + '</td><td>' + addCommas(pokokpinjaman) + '</td><td>' + addCommas(cicilanbulan) + '</td><td> ' + addCommas(jmlkredit) + ' </td></tr>');
            }
        }else{
            alert("Tidak ada jenis bunga" + jenis.join(", "));
        }
    });
});
</script>

<script>
function addCommas(num){
    var str = num.toString().split('.');
    if (str[0].length >= 4) {
        str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
    }
    return str.join('.');
}
$(document).ready(function(){

    $(".boxkreditur").hide();
    $(".boxangsuran").hide();


    $("#simulasi").click(function() {
        $(".boxkreditur").show();
        $(".boxangsuran").show();
    });

    $("#simulasi").click(function(event){
        event.preventDefault();
        var $inputs = $('#myForm :input');
        var values = {};
        var jmlkredit = parseFloat($('#jmlkredit').val(), 10);
        var jnkwaktu = ($('#jnkwaktu').val());
        var pokokpinjaman = jmlkredit / jnkwaktu;
        $inputs.each(function(){
            values[this.name] = $(this).val();
        });
        $('#displayArea').append("<tr><td>Rp." + addCommas(values.jumlah_kredit) + "</td><td>" + values.bunga_id + "</td><td>" + values.jangka_waktu + " Bulan</td><td>" + values.bunga + "%</td></tr>");
        $("input[type=text], textarea").val("");
        $('#pokok').append(addCommas(jmlkredit));
        $('#Jwaktu').append(addCommas(jnkwaktu));
        $('#Angsuran_perBulan').append(addCommas(pokokpinjaman));

    });
});

jQuery('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    autoclose: true,
});

</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
    $(document).ready(function(){
        $("input[data-type='number']").keyup(function(event){
            // skip for arrow keys
            if(event.which >= 37 && event.which <= 40){
                event.preventDefault();
            }
            var $this = $(this);
            var num = $this.val().replace(/,/gi, "");
            var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");
            console.log(num2);
            // the following line has been simplified. Revision history contains original.
            $this.val(num2);
        });
    });
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
    }
</script>
@endpush
