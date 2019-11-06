@extends('layouts.master')
@section ('title', 'Data Bunga Kredit - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Laporan Debitur<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions">
                <div class="d-inline-block ">

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
                                <input type="text" class="form-control pull-right input_kredit" id="laporan_debitur" name="laporan_kredit">
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
                            <th>Nama</th>
                            <th>No KTP</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>pekerjaan</th>
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
            {data : 'Nama'},
            {data : 'NoKTP'},
            {data : 'TanggalLahir'},
            {data : 'Email'},
            {data : 'NoTelp'},
            {data : 'pekerjaan'},
            ]
        });
    });

    $(document).on('click', '#tampil', function(){
        var tanggal = {
            'awal' : $('#laporan_debitur').data('daterangepicker').startDate.format('YYYY-MM-DD'),
            'akhir' : $('#laporan_debitur').data('daterangepicker').endDate.format('YYYY-MM-DD')
        };

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
            type: 'POST',
            url: '{{route('laporan-debitur-tampil')}}',
            data: tanggal,
            cache: false,
            success: function(response) {
                console.log(response);
                $.each(response, function(i, item){
                    var datas = [{
                        'Nama' : item.nama,
                        'NoKTP' : item.no_ktp,
                        'TanggalLahir' : item.tanggal_lahir,
                        'Email' : item.email,
                        'NoTelp' : item.no_telp,
                        'pekerjaan' : item.pekerjaan,
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
        var awal = $('#laporan_debitur').data('daterangepicker').startDate.format('YYYY-MM-DD');
        var akhir = $('#laporan_debitur').data('daterangepicker').endDate.format('YYYY-MM-DD');

        var link = "/print-debitur/"+awal+"/"+akhir;
        window.open(link);
    });
</script>
@endpush
