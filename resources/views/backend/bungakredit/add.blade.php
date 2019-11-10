@extends('layouts.master')
@section ('title', 'Data User - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Tambah Data Bunga<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="main-card mb-3 card col-12">
            <div class="card-body">
                <form class="formLPD" method="post" action="{{ route('bunga.store') }}" enctype="multipart/form-data" novalidate>
                {{csrf_field() }}
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Bunga</label>
                        <div class="col-sm-10">
                            <input name="bunga" id="bunga" placeholder="Masukkan Jumlah Bunga" type="text" class="form-control" required>
                            <div class="invalid-feedback">
                                Bunga Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleSelect" class="col-sm-2 col-form-label">Jenis Bunga</label>
                        <div class="col-sm-10">
                            <select name="jenis_bunga" id="jenis_bunga" class="form-control select2" required>
                                <option selected="selected" value="" disabled>Jenis Bunga</option>
                            @foreach(["Tetap" => "Tetap", "Menurun" => "Menurun" ] AS $bunga => $label)
                                <option value="{{$bunga}}">{{$label}}</option>
                            @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Pilih Salah Satu Jenis Bunga Boleh Kosong
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <!-- <button type="submit" class="btn btn-secondary">Submit</button> -->
                            <input type="submit" class="btn btn-primary btn-md" value="Simpan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
(function() {
'use strict';
window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('formLPD');
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
