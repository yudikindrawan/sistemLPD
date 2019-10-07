@extends('layouts.master')
@section ('title', 'Data Bunga Kredit - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Data Transaksi<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark"><i class="fa fa-star"></i></button>
                <div class="d-inline-block ">
                    <a href="{{ route('transaksi.create') }}"><button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-primary"><span class="btn-icon-wrapper pr-2 opacity-7"><i class="pe-7s-plus fa-w-20"></i></span>Tambah</button></a>
                </div>
            </div>    
        </div>
    </div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-borderd table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Kredit</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @php $i=0 @endphp
                        @foreach($transaksis as $transaksi)
                        @php $i++ @endphp
                        <tbody>
                            <td>{{$i}}</td>
                            <td></td>
                            <td>{{$transaksi->tanggal_kredit}}</td>
                            <td style="white-space: nowrap; ">
                            <a href="" class="btn btn-info btn-sm" style="color:white"><i class="pe-7s-refresh"></i> Ubah </a>
                            </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>
</div>
@endsection
@push('scripts')
<div class="modalKu"></div>
<script>
    // MODAL EDIT
    function modalEditTriger(id){
        jQuery.noConflict();
        $.ajax({
            url     : "{{ route('edituser') }}",
            method  : 'get',
            data    : {
            'id' : id
            },
            success : function(response){
            // console.log(response);
                $('.modalKu').html(response);
                $('#editModal').modal({ backdrop: 'static', keyboard: false });
            }
        });
    }
</script>
<script>
    /****************************************
    *       Basic Table                   *
    ****************************************/
    $('#zero_config').DataTable();

</script>
@endpush
