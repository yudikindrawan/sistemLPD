@extends('layouts.master')
@section ('title', 'Data Debitur - Sistem Informasi Kredit LPD Desa Tojan')

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
                <form class="" method="post" action="{{ route('debitur.store') }}" enctype="multipart/form-data">
                {{csrf_field() }}
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input  class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" type="text">
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
                            <input class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" id="no_ktp"  placeholder="Masukkan No KTP" type="text">
                        </div>
                    </div>
                                @error('no_ktp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    {{-- <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input name="username" id="username"  placeholder="Masukkan Username" type="text" class="form-control">
                        </div>
                    </div> --}}
                    <!-- <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" id="examplePassword" placeholder="Masukkan Password" type="text" class="form-control">
                        </div>
                    </div> -->
                    {{-- <div class="position-relative row form-group">
                        <label for="exampleSelect" class="col-sm-2 col-form-label">Roles</label>
                        <div class="col-sm-10">
                            <select name="roles_id" id="roles_id" class="form-control select2"> 
                                <option selected="selected" value="" disabled>Pilih Jabatan</option>
                            @foreach($roles as $role)   
                                <option value="{{$role->id}}">{{$role->nama_roles}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div> --}}
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input  class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan E-mail" type="email">
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
                            <select name="jk" id="jk" class="form-control select2 @error('jk') is-invalid @enderror"> 
                                <option selected="selected" value="" disabled>Jenis Kelamin</option>
                            @foreach(["L" => "L", "P" => "P" ] AS $jk => $label)   
                                <option value="{{$jk}}">{{$label}}</option>
                            @endforeach
                            </select>
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
                            <input class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" id="no_telp" placeholder="Masukkan No Telepon" type="text">
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
                            <input class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="examplePassword" placeholder="Masukkan Tempat Lahir" type="text">
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
                            <input type="text" class="form-control mydatepicker @error('tanggal_lahir') is-invalid @enderror" placeholder="mm/dd/yyyy" name="tanggal_lahir">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
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
                            <input class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" id="examplePassword" placeholder="Masukkan Pekerjaan" type="text">
                        </div>
                    </div>
                                @error('pekerjaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <!-- Validasi Image -->
                        {{-- @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        <!-- End of Validasi Images -->   
                    {{-- <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Upload</label>
                        <div class="col-md-10">
                            <div class="custom-file">
                                <input type="file" name="images" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Pilih Foto...</label>
                                <small class="form-text text-muted">Kualifikasi foto meliputi <span style="color:red;">jpg, jpeg, png</span>. tidak lebih besar dari <span style="color:red;">2 mb</span></small>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>  --}}
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