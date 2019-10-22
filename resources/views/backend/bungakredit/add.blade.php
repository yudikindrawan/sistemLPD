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
                <form class="" method="post" action="{{ route('bunga.store') }}" enctype="multipart/form-data">
                {{csrf_field() }}
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Bunga</label>
                        <div class="col-sm-10">
                            <input name="bunga" id="bunga" placeholder="Masukkan Jumlah Bunga" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleSelect" class="col-sm-2 col-form-label">Jenis Bunga</label>
                        <div class="col-sm-10">
                            <select name="jenis_bunga" id="jenis_bunga" class="form-control select2"> 
                                <option selected="selected" value="" disabled>Jenis Bunga</option>
                            @foreach(["FlateRate" => "FlateRate", "Anuitas" => "Anuitas", "Sliding" => "Sliding", "FloatingRate" => "FloatingRate" ] AS $bunga => $label)   
                                <option value="{{$bunga}}">{{$label}}</option>
                            @endforeach
                            </select>
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
@endpush