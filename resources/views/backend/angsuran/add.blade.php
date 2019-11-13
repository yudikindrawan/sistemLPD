@extends('layouts.master')
@section ('title', 'Pembayaran Angsuran - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Tambah Angsuran<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="main-card mb-3 card col-12">
            <div class="card-body">
                <form class="needs-validation" method="post" action="{{ route('angsuran.store') }}" enctype="multipart/form-data" id="myForm" novalidate>
                @csrf
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label jenis_bunga">No Transaksi</label>
                        <div class="col-sm-4">
                            <select name="no_transaksi" id="no_transaksi" class="mb-2 form-control select2 @error('no_transaksi') is-invalid @enderror no_transaksi" required>
                                <option selected="selected" value="" disabled>Pilih No Transaksi</option>
                            @foreach($transaksi as $trans)
                                <option value="{{$trans->id}}">{{$trans->id}}</option>
                            @endforeach
                            </select>
                            <div class="invalid-feedback">
                                No Transaksi Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="form-control @error('tanggal_pembayaran') is-invalid @enderror nama_debitur" name="nama_debitur" id="nama_debitur" required>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Tanggal Pembayaran</label>
                        <div class="col-sm-10">
                            <input  type="text" class="form-control @error('tanggal_pembayaran') is-invalid @enderror datepicker" name="tanggal_pembayaran" id="tanggal_pembayaran" required>
                            <div class="invalid-feedback">
                                Tanggal Pembayaran Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                        <div class="col-sm-10">
                            <input  type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('jumlah_kredit') is-invalid @enderror jumlah_kredit" name="jumlah_kredit" id="jmlkredit" readonly required>
                                <div class="invalid-feedback">
                                    Jumlah Pinjaman Tidak Boleh Kosong
                                </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Biaya Bunga</label>
                        <div class="col-sm-10">
                            <input type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('biaya_bunga') is-invalid @enderror biaya_bunga" name="biaya_bunga" id="biayabunga" readonly required>
                                <div class="invalid-feedback">
                                    Biaya Bunga Tidak Boleh Kosong
                                </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Total Pembayaran</label>
                        <div class="col-sm-10">
                            <input type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('biaya_bunga') is-invalid @enderror total_pembayaran" name="jumlah_pembayaran" id="jumlah_pembayaran" readonly required>
                                <div class="invalid-feedback">
                                    Total Pembayaran Tidak Boleh Kosong
                                </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Sisa Pinjaman</label>
                        <div class="col-sm-10">
                            <input  type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('sisa_pinjaman') is-invalid @enderror sisa_pinjaman" name="sisa_pembayaran" id="jmlkredit" readonly>
                                <div class="invalid-feedback">
                                    Sisa Pinjaman Tidak Boleh Kosong
                                </div>
                        </div>
                    </div>
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Jangka Waktu</label>
                        <div class="col-sm-10">
                            <input  type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('angsuranKe') is-invalid @enderror angsuranKe" name="angsuranKe" id="angsuranKe" required>
                                <div class="invalid-feedback">
                                    Jangka Waktu Tidak Boleh Kosong
                                </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label angsuran_pokok">Angsuran Pokok</label>
                        <div class="col-sm-6">
                            <div class="input-group-append">
                                <input type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('angsuran_pokok') is-invalid @enderror angsuran_pokok" name="angsuran_pokok" id="angsuran_pokok" required>
                                    <div class="invalid-feedback">
                                        Angsuran Pokok Tidak Boleh Kosong
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label jumlah_pokok">Jumlah Pokok</label>
                        <div class="col-sm-6">
                            <div class="input-group-append">
                                <input type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('jumlah_pokok') is-invalid @enderror jumlah_pokok" name="jumlah_pokok" id="jumlah_pokok" value="" required>
                                    <div class="invalid-feedback">
                                        Jumlah Pokok Tidak Boleh Kosong
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label jumlah_bunga">Jumlah Bunga</label>
                        <div class="col-sm-6">
                            <div class="input-group-prepend">
                                <input type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('jumlah_bunga') is-invalid @enderror jumla" name="jumlah_bunga" id="jumlah_bunga" value="" required>
                                    <div class="invalid-feedback">
                                        Jumlah Bunga Tidak Boleh Kosong
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label total">Total yang harus di bayar</label>
                        <div class="col-sm-6">
                            <div class="input-group-prepend">
                                <input type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('total') is-invalid @enderror" name="total_bayar" id="total_bayar" required>
                                    <div class="invalid-feedback">
                                        Total Tidak Boleh Kosong
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label jumlah_pokok">Denda</label>
                        <div class="col-sm-6">
                            <div class="input-group-append">
                                <input type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('jumlah_pokok') is-invalid @enderror denda" name="denda" id="denda" required>
                                    <div class="invalid-feedback">
                                        Denda Tidak Boleh Kosong
                                    </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="submit" class="btn btn-secondary btn-lg" value="Simpan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
function addCommas(num){
    var str = num.toString().split('.');
    if (str[0].length >= 4) {
        str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
    }
    return str.join('.');
}
</script>
<script>
    $(document).on('change','.no_transaksi',function () {
        var id=$(this).val();
        var a=$(this).parent();
        var angsuranPokok = ($('#jumlah_pokok').val());
        var biayaBunga = ($('#jumlah_bunga').val());
        console.log(id);
        var op="";
        $.ajax({
            type:'get',
            url:"{{route('cari-transaksi')}}",
            data:{'id':id},
            dataType:'json',//return data will be json
            success:function(data){
                console.log(data.jumlah_kredit);
                console.log(data.biaya_bunga);
                console.log(data.total);
                console.log(data.jangka_waktu);
                console.log(data.angsuran_pokok);
                console.log(data.tanggal_kredit);
                console.log(data.angsuran_pokok);
                console.log(data.biaya_bunga);
                console.log(data.id);
                //ambil data dari table transaksi
                $('.tanggal_kredit').val(data.tanggal_kredit);
                $('.nama_debitur').val(data.id);
                $('.angsuran_pokok').val(data.angsuran_pokok);
                $('.sisa_pinjaman').val(data.jumlah_kredit);
                $('.jumlah_kredit').val(data.jumlah_kredit);
                $('.biaya_bunga').val(data.biaya_bunga);
                $('.total_pembayaran').val(data.total);
                $('.angsuranKe').val(data.jangka_waktu);
                $('#jumlah_pokok').val(data.angsuran_pokok);
                
                alert(data.bunga_id)
                //hitung pembayaran bunga flat
                if (data.bunga_id == 1 ) {
                    parsebunga = data.biaya_bunga / 100;
                    pokokpinjaman = data.jumlah_kredit / data.jangka_waktu;
                    angsuranbunga_flat = (data.jumlah_kredit*parsebunga) / data.jangka_waktu;
                    total_angsuranflat = angsuranbunga_flat + pokokpinjaman;

                    $('#jumlah_bunga').val(addCommas(angsuranbunga_flat));
                //hitung pembayaran bunga menurun
                }else if (data.bunga_id == 2 ) {
                        a = 1;
                        $.ajax({
                            type:'get',
                            url:"{{route('cari-angsuran')}}",
                            data:{'id':id},
                            dataType:'json',//return data will be json
                            success:function(data){
                                a = a + 1
                            }
                        });
                        
                        jmlkredit = data.jumlah_kredit;
                        pokokpinjaman = data.jumlah_kredit / data.jangka_waktu;
                        parsebunga = data.biaya_bunga / 100;
                        kreditEfektif = (jmlkredit - ( a - 1) * pokokpinjaman) * parsebunga / 12;
                        cicilanbulan = pokokpinjaman + kreditEfektif;
                        
                        $('#jumlah_bunga').val(parseInt(cicilanbulan));
                }
                //hitung total bayar setiap bulan
                $('#total_bayar').val(parseFloat(data.angsuran_pokok) + parseFloat($('#jumlah_bunga').val()));
            },
            error:function(){
                alert('error')
            }
        });
    });
</script>
<script>
        $('.select2').select2();
        jQuery('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            autoclose: true,
        });
</script>
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
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
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
    }
</script>
@endpush
