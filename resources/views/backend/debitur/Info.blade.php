@extends('layouts.master')
@section ('title', 'Informasi Debitur - Sistem Informasi Akutansi LPD Desa Tojan')
@push('styles')
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
    </style>
@endpush
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
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <h5 class="card-header">Informasi Data Diri</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <h5 class="card-header">Informasi Kredit</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <h5 class="card-header">Informasi Angsuran</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-borderd table-striped table-dark">
                            <thead class="thead-dark">
                            <tr>
                                <th>No Transaksi</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Jumlah Pembayaran</th>
                                <th>Sisa Pembayaran</th>
                                {{-- <th>Pembayaran Bunga</th>
                                <th>Pembayaran denda</th>
                                <th>Sisa Kredit</th> --}}
                                {{-- <th>Angsuran</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                                {{-- <td>{{$angsurans->transaksi_id}}</td>
                                <td>{{$angsurans->tanggal_pembayaran}}</td>
                                <td>Rp.{{ number_format($angsurans->jumlah_pembayaran,2)}}</td>
                                <td>Rp.{{ number_format($angsurans->sisa_pembayaran,2)}}</td> --}}
                                {{-- <td>{{$angsuran->pembayaran_bunga}}</td>
                                <td>{{$angsuran->pembayaran_denda}}</td>
                                <td>{{$angsuran->sisa_kredit}}</td>
                                <td>{{$angsuran->angsuran}}</td> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection
@push('scripts')
<script>
    /****************************************
    *       Basic Table                   *
    ****************************************/
    $('#zero_config').DataTable();

</script>
@endpush
