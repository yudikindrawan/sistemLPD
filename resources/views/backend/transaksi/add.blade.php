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
                <form class="" method="post" action="{{ route('transaksi.store') }}" enctype="multipart/form-data" id="myForm">
                @csrf
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Nama Kreditur</label>
                        <div class="col-sm-10">
                            <select name="users_id" id="users_id" class="form-control select2 @error('nama_kreditur') is-invalid @enderror"> 
                                <option selected="selected" value="" disabled>Nama Kreditur</option>
                            @foreach($krediturs as $kredit)   
                                <option value="{{$kredit->id}}">{{$kredit->nama}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                                @error('nama_kreditur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal Kredit</label>
                        <div class="col-sm-4">
                            <input class="form-control @error('tanggal_kredit') is-invalid @enderror" name="tanggal_kredit" id="tanggal_kredit"  placeholder="Tanggal Kredit" type="text">
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
                            <input  type="text" class="form-control @error('jumlah_kredit') is-invalid @enderror jumlah_kredit" name="jumlah_kredit" id="jmlkredit">
                        </div>
                    </div>
                                @error('jumlah_kredit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label jenis_bunga">Jenis Bunga</label>
                        <div class="col-sm-4">
                            <select name="bunga_id" id="bunga_id" class="form-control select2 @error('jenis_bunga') is-invalid @enderror jenisbunga"> 
                                <option selected="selected" value="" disabled>Pilih Jenis Bunga</option>
                            @foreach($bungas as $bunga)   
                                <option value="{{$bunga->id}}">{{$bunga->jenis_bunga}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                                @error('jenis_bunga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label jangka_waktu">Jangka Waktu</label>
                        <div class="col-sm-4">
                        <div class="input-group-append">
                            <input type="text" class="form-control @error('jangka_waktu') is-invalid @enderror" name="jangka_waktu" id="jnkwaktu">
                            <span class="input-group-text">bulan</span>
                        </div>
                        </div>
                    </div>
                                @error('jangka_waktu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label bunga">Bunga</label>
                        <div class="col-sm-2">
                            <div class="input-group-prepend">
                                <input type="text" class="form-control @error('bunga') is-invalid @enderror" name="bunga" id="bungas">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                                @error('bunga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <hr>
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
                <h5 class="card-title">Data Kreditur</h5><hr>
                <table class="table table-hover table-bordered" id="datakreditur">
                    <thead>
                        <th>Jumlah Pinjaman</th>
                        <th>Jenis Bunga</th>
                        <th>Jangka Waktu</th>
                        <th>Bunga</th>
                    </thead>
                    <tbody id="displayArea"> </tbody>
                        {{-- <tr>
                            <th>Jumlah Pinjaman</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Jenis Bunga</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Jangka Waktu</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Bunga</th>
                            <td></td>
                        </tr> --}}
                </table>
                {{-- <hr><h5 class="card-title">Jumlah Angsuran</h5><hr>
                <table class="table table-hover table-bordered" id="jmlangsuran">
                    <tbody>
                        <tr>
                            <th>Angsuran per Bulan</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table> --}}
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
                            <th>Periode</th>
                            <th>Angsuran Bunga</th>
                            <th>Angsuran Pokok</th>
                            <th>Total Angsuran</th>
                            <th>Sisa Pinjaman</th>
                        </tr>
                    </thead>
                    <tbody id="displaykredit">
                        {{-- <tr>
                            <td id="periode"></td>
                            <td id="angsuranbunga"></td>
                            <td id="angsuranpokok"></td>
                            <td id="totalangsuran"></td>
                            <td id="sisapinjaman"></td>
                        </tr> --}}
                    </tbody>
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
        $("#simulasi").click(function(){
            
            var jmlkredit = parseInt($('#jmlkredit').val());
            var bunga = parseInt($('#bungas').val());
            var jnkwaktu = parseInt($('#jnkwaktu').val());
            var pokokpinjaman = jmlkredit / jnkwaktu;
            var jenis = [];
            $.each($(".jenisbunga option:selected"), function(){
                jenis.push($(this).val())
            });
            if(jenis == 1){
                // $('#angsuranbunga').append('<td>' + bungaflat + '</td>');
                $('#angsuranpokok').append('<td>' + flat + '</td>');
                for (let i = 0; i < jnkwaktu; i++) {
                    var flat = parseInt(jmlkredit) * parseInt(bunga) / parseInt(jnkwaktu);
                    jmlkredit = jmlkredit - pokokpinjaman;
                    $('#displaykredit').append('<tr><td>' + jmlkredit + '</td></tr>');
                    // alert(flat);
                }
            }else if(jenis == 2){
                alert("ini" + jenis.join(", "));
            }else if(jenis == 3){
                alert("ini" + jenis.join(", "));
            }else if(jenis == 4){
                alert("ini" + jenis.join(", "));
            }else{
                alert("Tidak ada jenis bunga" + jenis.join(", "));
            }
        });
    });
</script>
<script>
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
        $inputs.each(function(){
            values[this.name] = $(this).val();
        });
        $('#displayArea').append("<tr><td>" + values.jumlah_kredit + "</td><td>" + values.bunga_id + "</td><td>" + values.jangka_waktu + "</td><td>" + values.bunga + "</td></tr>");
        $("input[type=text], textarea").val("");
        
    });

});  
</script>

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
