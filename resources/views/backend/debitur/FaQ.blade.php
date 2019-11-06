@extends('layouts.master')
@section ('title', 'FaQ - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            @if (Auth::user()->roles_id !=3 )
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
                    <div>Data Debitur<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block ">
                        <a href="{{ route('debitur.create') }}"><button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-primary"><span class="btn-icon-wrapper pr-2 opacity-7"><i class="pe-7s-plus fa-w-20"></i></span>Tambah</button></a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    <div class="row">
        <div class="col-12">
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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
            url     : "{{ route('debitur-detail') }}",
            method  : 'get',
            data    : {
            'id' : id
            },
            success : function(response){
            // console.log(response);
                $('.modalKu').html(response);
                $('#detaildebiturs').modal({ backdrop: 'static', keyboard: false });
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
