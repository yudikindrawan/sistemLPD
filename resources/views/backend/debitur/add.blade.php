@extends('layouts.master')
@section ('title', 'Data Debitur - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Tambah Data Debitur<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions"> 
            </div>    
        </div>
    </div>            
    <div class="row">
        <div class="main-card mb-3 card col-12">
            <div class="card-body">
                <form class="needs-validation" method="post" action="{{ route('debitur.store') }}" enctype="multipart/form-data" novalidate>
                {{csrf_field() }}
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input  class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" type="text" required>
                            <div class="invalid-feedback">
                                Nama Lengkap Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">No KTP</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" id="no_ktp"  placeholder="Masukkan No KTP" type="text" required>
                            <div class="invalid-feedback">
                                No KTP Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('no_ktp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input  class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan E-mail" type="email" required>
                            <div class="invalid-feedback">
                                E-mail Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="exampleSelect" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jk" id="jk" class="form-control select2 @error('jk') is-invalid @enderror" required> 
                                <option selected="selected" value="" disabled>Jenis Kelamin</option>
                            @foreach(["L" => "L", "P" => "P" ] AS $jk => $label)   
                                <option value="{{$jk}}">{{$label}}</option>
                            @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Jenis Kelamin Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" id="no_telp" placeholder="Masukkan No Telepon" type="text" required>
                            <div class="invalid-feedback">
                            No Telepon Tidak Boleh Kosong
                        </div>
                        </div>
                    </div>
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="examplePassword" placeholder="Masukkan Tempat Lahir" type="text" required>
                        <div class="invalid-feedback">
                            Tempat Lahir Tidak Boleh Kosong
                        </div>
                        </div>
                    </div> 
                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="input-group col-sm-10">
                            <input type="text" class="form-control mydatepicker @error('tanggal_lahir') is-invalid @enderror" placeholder="mm/dd/yyyy" name="tanggal_lahir" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <div class="invalid-feedback">
                                Tanggal Lahir Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" id="examplePassword" placeholder="Masukkan Pekerjaan" type="text" required>
                            <div class="invalid-feedback">
                                Pekerjaan Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                                @error('pekerjaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <!-- <button type="submit" class="btn btn-secondary">Submit</button> -->
                            <input type="submit" class="btn btn-secondary btn-sm" value="Simpan">
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
    </script>
@endpush