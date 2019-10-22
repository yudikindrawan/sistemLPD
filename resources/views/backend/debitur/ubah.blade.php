@extends('layouts.master')
@section ('title', 'Data Debitur - Sistem Informasi Kredit LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Ubah Data Debitur<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions"> 
            </div>    
        </div>
    </div>            
    <div class="row">
        <div class="main-card mb-3 card col-12">
            <div class="card-body">
                <form class="" method="post" action="{{ route('debitur.update', $debiturs->id) }}" enctype="multipart/form-data">
                {{csrf_field() }}
                    {{method_field('put')}}
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input name="nama" id="nama" value="{{$debiturs->nama}}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">No KTP</label>
                        <div class="col-sm-10">
                            <input name="no_ktp" id="no_ktp" value="{{$debiturs->debitur->no_ktp}}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input name="email" id="email" value="{{$debiturs->email}}" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleSelect" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jk" id="jk" class="form-control select2"> 
                                <option selected="selected" value="" disabled>Jenis Kelamin</option>
                            @foreach(["L" => "L", "P" => "P" ] AS $jk => $label)   
                                <option value="{{$jk}}" {{old("jk", $debiturs->jk) == $jk ? "selected" : " "}}>{{$label}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                        <input name="no_telp" id="no_telp" value="{{$debiturs->no_telp}}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input name="tempat_lahir" id="examplePassword" value="{{$debiturs->tempat_lahir}}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="input-group col-sm-10">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy" name="tanggal_lahir" value="{{$debiturs->tanggal_lahir}}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                        <input name="pekerjaan" id="examplePassword" value="{{$debiturs->debitur->pekerjaan}}" type="text" class="form-control">
                        </div>
                    </div>
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