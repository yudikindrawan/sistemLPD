@extends('layouts.master')
@section ('title', 'Ubah Password - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                @if(Auth::user()->roles_id != 3)
                <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
                <div>Ubah Password<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
                @endif
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="main-card mb-3 card col-md-12">
            <div class="card-body">
                <form class="formsiswa" id="formsiswa" action="{{ route('changePassword') }}" method="post" novalidate>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ubah Password</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" class="form-control"/>
                            <div class="form-group">
                                <label for="currentpassword">Password Lama</label>
                                <input type="password" name="currentpassword" id="currentpassword" class="form-control" placeholder="Masukan Password Lama" required/>
                                <div class="invalid-feedback">
                                    Password Lama Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="newpassword">Password Baru</label>
                                <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="Masukan Password Baru" required/>
                                <div class="invalid-feedback">
                                    Password Baru Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="newpasswordconfirm">Konfirmasi Password Baru</label>
                                <input type="password" name="newpasswordconfirm" id="newpasswordconfirm" class="form-control" placeholder="Masukan Konfirmasi Password Baru" required/>
                                <div class="invalid-feedback">
                                    Silahkan Konfirmasi Password Anda
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-primary" value="Perbaharui">
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
            var forms = document.getElementsByClassName('formsiswa');
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
@endpush
