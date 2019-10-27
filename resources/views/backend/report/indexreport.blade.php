@extends('layouts.master')
@section ('title', 'Data Bunga Kredit - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Data Bunga<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions">
                <div class="d-inline-block ">
                    <a href="{{ route('bunga.create') }}"><button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-primary"><span class="btn-icon-wrapper pr-2 opacity-7"><i class="pe-7s-plus fa-w-20"></i></span>Tambah</button></a>
                </div>
            </div>    
        </div>
    </div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date range:</label>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control pull-right input_kredit" id="laporan_kredit" name="laporan_kredit">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Tampilkan</label>
                            <div class="form-submit">
                                <a href="#" id="tampil"><button class="btn btn-primary btn-lg">Tampilkan</button></a><input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card box_tampil">
            <div class="card-body">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                <table id="dataTrans" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No Transaksi</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Jumlah Kredit</th>
                            <th>Angsuran Pokok</th>
                            <th>Angsuran Bunga</th>
                            <th>Jangka Waktu</th>
                            <th>Biaya Admin</th>
                            <th>Biaya Materai</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <button type="button" id="print" class="btn btn-success pull-right" data-dismiss="modal"><i class="mdi mdi-cloud-download"></i> Cetak</button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        var tb = {};
        $('#dataTrans').parents('div.table').first().hide();
    }); 
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
    });
</script>
<script>
    $(document).ready(function(){
        jQuery.noConflict()
        $('.input_kredit').daterangepicker({
            "startDate": "<?php echo date('d - m - Y'); ?>",
            "endDate": "<?php echo date('d - m - Y'); ?>",
            "opens": "right",
            "locale": {
                "format": "DD - MM - YYYY",
                "separator": " s/d ",
                "applyLabel": "Ok",
                "cancelLabel": "Batal",
                "fromLabel": "Dari",
                "toLabel": "Sampai",
                "customRangeLabel": "Custom",
                "daysOfWeek": [
                    "Min",
                    "Sen",
                    "Sel",
                    "Rab",
                    "Kam",
                    "Jum",
                    "Sab"
                ],
                "monthNames": [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember"
                ],
                "firstDay": 0
            }
        });

        tb = $('#dataTrans').DataTable({
            "ordering" : false,
            "searching" : false,
            "lengthChange" : false,
            "iDisplayLength" : 5,
            'paging'      : false,
            columns : [
            {data : 'NoTransaksi'},
            {data : 'Nama'},
            {data : 'Tanggal'},
            {data : 'JumlahKredit'},
            {data : 'AngsuranPokok'},
            {data : 'AngsuranBunga'},
            {data : 'JangkaWaktu'},
            {data : 'BiayaAdmin'},
            {data : 'BiayaMaterai'},
            ]
        });
    });

    $(document).on('click', '#tampil', function(){
        var tanggal = {
            'awal' : $('#laporan_kredit').data('daterangepicker').startDate.format('YYYY-MM-DD'),
            'akhir' : $('#laporan_kredit').data('daterangepicker').endDate.format('YYYY-MM-DD')
        };

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
            type: 'POST',
            url: '{{route('laporan_tampil')}}',
            data: tanggal,
            cache: false,
            success: function(response) {
                console.log(response);
                $.each(response, function(i, item){
                    var datas = [{
                        'NoTransaksi' : item.id,
                        'Nama' : item.nama,
                        'Tanggal' : item.tanggal_kredit,
                        'JumlahKredit' : item.jumlah_kredit,
                        'AngsuranPokok' : item.angsuran_pokok,
                        'AngsuranBunga' : item.biaya_bunga,
                        'JangkaWaktu' : item.jangka_waktu,
                        'BiayaAdmin' : item.biaya_admin,
                        'BiayaMaterai' : item.biaya_materai,
                    }];
                datas.forEach(function(data) {
                tb.row.add(data).draw();
                });
                });
            },
            error: function(){
                alert('A jQuery error has occurred. Status: ');
            }
        });
            $('#dataTrans').parents('div.table').first().show();
            $('.box_tampil').show();
            $('#dataTrans').dataTable().fnClearTable();
    });

    $(document).on('click', '#print', function(){
        var awal = $('#laporan_kredit').data('daterangepicker').startDate.format('YYYY-MM-DD');
        var akhir = $('#laporan_kredit').data('daterangepicker').endDate.format('YYYY-MM-DD');

        var link = "/print/"+awal+"/"+akhir;
        window.open(link);
    });
</script>
@endpush
