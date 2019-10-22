@extends('layouts.master')
@section ('title', 'Profile User - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Detail Profile<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions"> 
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="main-card mb-3 card col-md-8 ">
            <div class="card-body">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="rounded-circle mx-auto d-block " src="{{ asset ('assets/production/images/picture.jpg') }}" alt="User profile picture">
                        <h3 class="profile-username text-center">{{ $users->nama }}</h3>
                        <h6 class="text-muted text-center">{{ $users->email }}</h6>
                        <p class="text-muted text-center">{{ $users->roles->nama_roles }}</p>
                        <hr>
                        <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>
                        <hr>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                            <p class="text-muted">Malibu, California</p>
                        <hr> 
                            <strong><i class="fa fa-calendar margin-r-5"></i> Tempat dan Tanggal lahir</strong>
                            <p>
                                <span class="label label-danger">{{$users->tempat_lahir}},</span>
                                <span class="label label-success">{{$users->tanggal_lahir}}</span>
                                
                            </p>
                        <hr>
                            <strong><i class="fa fa-phone margin-r-5"></i> No Telepon</strong>
                            <p>{{$users->no_telp}}</p>
                        <hr>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    jQuery('.mydatepicker').datepicker();
</script>
@endpush