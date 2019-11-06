@extends('layouts.master')
@section ('title', 'Data Debitur - Sistem Informasi Akutansi LPD Desa Tojan')

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
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Tanggal Pembayaran</label>
                        <div class="col-sm-10">
                            <input  type="text" class="form-control @error('tanggal_pembayaran') is-invalid @enderror datepicker" name="tanggal_pembayaran" id="tanggal_pembayaran" required>
                            <div class="invalid-feedback">
                                Tanggal Pembayaran Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('tanggal_pembayaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                        <div class="col-sm-10">
                            <input  type="text" class="form-control @error('jumlah_kredit') is-invalid @enderror jumlah_kredit" name="jumlah_kredit" id="jmlkredit" readonly required>
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
                        <label for="examplePassword" class="col-sm-2 col-form-label">Biaya Bunga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('biaya_bunga') is-invalid @enderror biaya_bunga" name="biaya_bunga" id="biayabunga" readonly required>
                                <div class="invalid-feedback">
                                    Biaya Bunga Tidak Boleh Kosong
                                </div>
                        </div>
                    </div>
                                @error('biaya_bunga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Total Pembayaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('biaya_bunga') is-invalid @enderror total_pembayaran" name="jumlah_pembayaran" id="jumlah_pembayaran" readonly required>
                                <div class="invalid-feedback">
                                    Total Pembayaran Tidak Boleh Kosong
                                </div>
                        </div>
                    </div>
                                @error('biaya_bunga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Sisa Pinjaman</label>
                        <div class="col-sm-10">
                            <input  type="text" class="form-control @error('sisa_pinjaman') is-invalid @enderror sisa_pinjaman" name="sisa_pembayaran" id="jmlkredit" readonly>
                                <div class="invalid-feedback">
                                    Sisa Pinjaman Tidak Boleh Kosong
                                </div>
                        </div>
                    </div>
                                @error('sisa_pinjaman')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Jangka Waktu</label>
                        <div class="col-sm-10">
                            <input  type="text" class="form-control @error('angsuranKe') is-invalid @enderror angsuranKe" name="angsuranKe" id="angsuranKe" required>
                                <div class="invalid-feedback">
                                    Jangka Waktu Tidak Boleh Kosong
                                </div>
                        </div>
                    </div>
                                @error('angsuranKe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label angsuran_pokok">Angsuran Pokok</label>
                        <div class="col-sm-6">
                            <div class="input-group-append">
                                <input type="text" class="form-control @error('angsuran_pokok') is-invalid @enderror angsuran_pokok" name="angsuran_pokok" id="angsuran_pokok" required>
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
                        <label for="examplePassword" class="col-sm-2 col-form-label jumlah_pokok">Jumlah Pokok</label>
                        <div class="col-sm-6">
                            <div class="input-group-append">
                                <input type="text" class="form-control @error('jumlah_pokok') is-invalid @enderror jumlah_pokok" name="jumlah_pokok" id="jumlah_pokok" value="" required>
                                    <div class="invalid-feedback">
                                        Jumlah Pokok Tidak Boleh Kosong
                                    </div>
                            </div>
                        </div>
                    </div>
                                @error('jumlah_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label jumlah_bunga">Jumlah Bunga</label>
                        <div class="col-sm-6">
                            <div class="input-group-prepend">
                                <input type="text" class="form-control @error('jumlah_bunga') is-invalid @enderror jumla" name="jumlah_bunga" id="jumlah_bunga" value="" required>
                                    <div class="invalid-feedback">
                                        Jumlah Bunga Tidak Boleh Kosong
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
                        <label for="examplePassword" class="col-sm-2 col-form-label total">Total yang harus di bayar</label>
                        <div class="col-sm-6">
                            <div class="input-group-prepend">
                                <input type="text" class="form-control @error('total') is-invalid @enderror" name="total_bayar" id="total_bayar" required>
                                    <div class="invalid-feedback">
                                        Total Tidak Boleh Kosong
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
                        <label for="examplePassword" class="col-sm-2 col-form-label jumlah_pokok">Denda</label>
                        <div class="col-sm-6">
                            <div class="input-group-append">
                                <input type="text" class="form-control @error('jumlah_pokok') is-invalid @enderror denda" name="denda" id="denda" required>
                                    <div class="invalid-feedback">
                                        Denda Tidak Boleh Kosong
                                    </div>
                            </div>
                        </div>
                    </div>
                                @error('jumlah_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <hr>
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <!-- <button type="submit" class="btn btn-secondary">Submit</button> -->
                            <input type="submit" class="btn btn-secondary btn-lg" value="Simpan">
                            {{-- <button type="button" class="btn btn-primary btn-lg simulasi" id="simulasi">Simulasi</button> --}}
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

    $(document).on('change','.no_transaksi',function () {

        var id=$(this).val();
        var a=$(this).parent();

        var angsuranPokok = ($('#jumlah_pokok').val());
        var biayaBunga = ($('#jumlah_bunga').val());
        // console.log(Jpokok + Jbunga);
        // var Total = (parseInt(angsuranPokok) + parseInt(biayaBunga));
        // console.log(Jpokok);
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
            console.log(data.nama);

            $('.tanggal_kredit').val(data.tanggal_kredit);
            $('.nama_debitur').val(data.nama);
            $('.angsuran_pokok').val(data.angsuran_pokok);
            $('.sisa_pinjaman').val(data.jumlah_kredit);
            $('.jumlah_kredit').val(data.jumlah_kredit);
            $('.biaya_bunga').val(data.biaya_bunga);
            $('.total_pembayaran').val(data.total);
            $('.angsuranKe').val(data.jangka_waktu);


            $('#jumlah_pokok').val(data.angsuran_pokok);
            $('#jumlah_bunga').val(data.biaya_bunga);
            $('#total_bayar').val(parseFloat(angsuranPokok) + parseFloat(biayaBunga));

        },
        error:function(){
          alert('error')
        }

        });

    });
    // $(document).ready(function(){
    //   var angsuranPokok = ($('#jumlah_pokok').val());
    //   var biayaBunga = ($('#jumlah_bunga').val());
    //   console.log(angsuranPokok);
    //   var Total = (parseInt(angsuranPokok) + parseInt(biayaBunga));
    //   $('#total_bayar').val(Total);
    // });

//     function hitung() {
//       var a = $("#jumlah_pokok").val();
//       var b = $("#jumlah_bunga").val();
//         console.log(a);
//         console.log(b);
//       c = a + b; //a tambah b
//       $("#total_bayar").val(c);
//
// }

    // function getTotal(){
    //   jumPokok = $(document). find('input[name=jumlah_pokok]').val() || 0;
    //   jumBunga = $(document). find('input[name=jumlah_bunga]').val() || 0;
    //   console.log(jumPokok);
    //   $(document).find('input[name=total_bayar]').val(jumPokok + jumBunga);
    // }
    //
    // $(document).on('input','input[name=jumlah_pokok]', function() {
    //     getTotal();
    // });
    //
    // $(document).on('input','input[name=jumlah_bunga]', function() {
    //     getTotal();
    // });

</script>
<script>
        $('.select2').select2();

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

{{-- <script>


     // $(document).on('change','.bunga_id',function () {
    //     var id=$(this).val();

    //     var a=$(this).parent();
    //     console.log(id);
    //     var op="";
    //     $.ajax({
    //     type:'get',
    //     url:"{{route('caribunga')}}",
    //     data:{'id':id},
    //     dataType:'json',//return data will be json
    //     success:function(data){
    //         console.log(data.bunga);

    //         // menampilkan value
    //         $('#bunga').val(data.bunga);
    //     },
    //     error:function(){

    //     }
    //     });
    // });
$(document).ready(function(){
    $("#simulasi").click(function(){

        var jmlkredit = parseFloat($('#jmlkredit').val(), 10);
        var bunga = ($('#bungas').val());
        var jnkwaktu = ($('#jnkwaktu').val());
        var periode = $('#tanggal_kredit').val();

        var pokokpinjaman = jmlkredit / jnkwaktu;
        var angsuranbunga_flat = (jmlkredit * bunga) / jnkwaktu;
        var parsebunga = bunga / 100;
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
            alert("ini" + jenis.join(", "));
        }else if(jenis == 3){
            for (let a = 1; a <= jnkwaktu; a++) {

                kreditEfektif = (jmlkredit - ( a - 1) * pokokpinjaman) * bunga / 12;
                cicilanbulan = pokokpinjaman + kreditEfektif;
                jmlkredit = jmlkredit - cicilanbulan;
                $('#displaykredit').append('<tr><td>Bulan ke-' + a + '</td><td>' + addCommas(kreditEfektif) + '</td><td>' + addCommas(pokokpinjaman) + '</td><td>' + addCommas(cicilanbulan) + '</td><td> ' + addCommas(jmlkredit) + ' </td></tr>');
            }
        }else if(jenis == 4){
            alert("ini" + jenis.join(", "));
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
</script> --}}

{{-- <script>
        transaksi = $(document). find('input[name=jumlah_kredit]').val() || 0;
        bunga = $(document). find('input[name=bunga]').val() || 0;
        waktu = $(document). find('input[name=jangka_waktu]').val() || 0;

        $(document).find('input[name=biaya_bunga]').val(transaksi * bunga / waktu);

    transaksi = $(document). find('input[name=jumlah_kredit]').val() || 0;
        bunga = $(document). find('input[name=bunga]').val() || 0;
        waktu = $(document). find('input[name=jangka_waktu]').val() || 0;
$(document).ready(function(){
    $('#datakreditur').parents('div.table').first().hide();
    $('#angsuran').parents('div.table').first().hide();
    $('#jmlangsuran').parents('div.table').first().hide();

    $(document).on('click','.simulasi', function () {
    $('.boxkreditur').show();
    $('.boxangsuran').show();
});
});

</script> --}}
{{-- <script type="text/javascript">
$(document).on('change','.bunga_id',function () {
        var id=$(this).val();

        var a=$(this).parent();
        console.log(id);
        var op="";
        $.ajax({
        type:'get',
        url:"{{route('caribunga')}}",
        data:{'id':id},
        dataType:'json',//return data will be json
        success:function(data){
            console.log(data.bunga);

            // menampilkan value
            $('#bunga').val(data.bunga);
        },
        error:function(){

        }
        });
    });
$(document).ready(function(){

    function getFlat(){
        transaksi = $(document). find('input[name=jumlah_kredit]').val() || 0;
        waktu = $(document). find('input[name=jangka_waktu]').val() || 0;

        $(document).find('input[name=angsuran_pokok]').val(transaksi / waktu);
    }

    $(document).on('input', 'input[name=jumlah_kredit]', function() {
        getFlat();
    });
    $(document).on('input', 'input[name=jangka_waktu]', function() {
        getFlat();
    });


    function getBungaFlat(){
        transaksi = $(document). find('input[name=jumlah_kredit]').val() || 0;
        bunga = $(document). find('input[name=bunga]').val() || 0;
        waktu = $(document). find('input[name=jangka_waktu]').val() || 0;

        $(document).find('input[name=biaya_bunga]').val(transaksi * bunga / waktu);

    }
    $(document).on('input', 'input[name=jumlah_kredit]', function() {
        getBungaFlat();
    });
    $(document).on('input', 'input[name=bunga]', function() {
        getBungaFlat();
    });
    $(document).on('input', 'input[name=jangka_waktu]', function() {
        getBungaFlat();
    });

    function getTotalFlat() {
        bunga = $(document). find('select[name=bunga]').val() || 0;
        $.ajax({
            url    : "{{url('/total-angsuran')}}/" + $(document).find('select[name=angsuran_pokok]').val() + "/" + bunga,
            method : 'GET',
            success : function(response){
                console.log(response)
                $(document).find('input[name=total]').val(response.total)
            }
        });
    }

    $(document).on('input', 'input[name=biaya_bunga]', function() {
        getTotalFlat();
    });

    $(document).on('input', 'select[name=angsuran_pokok]', function() {
        getTotalFlat();
    });
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
        jQuery('.mydatepicker').datepicker();

        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script> --}}
@endpush
