@extends('layouts.master')
@section ('title', 'Data Debitur - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
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
                            <th>Nama Debitur</th>
                            <th>Tanggal Kredit</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @php $i=0 @endphp
                        @foreach($deb as $debitur)
                        @php $i++ @endphp
                        <tbody>
                            <td>{{$i}}</td>
                            <td>{{ $debitur->nama}}</td>
                            <td>{{ $debitur->created_at}}</td>
                                @if ($debitur->status == 'active')
                                    <td><span class="mb-2 mr-2 badge badge-success">{{ $debitur->status }}</span></td>
                                @else
                                    <td><span class="mb-2 mr-2 badge badge-danger">{{ $debitur->status }}</span></td>
                                @endif
                            <td style="white-space: nowrap; ">
                                <a href="{{ route('debitur.edit', $debitur->id)}}" class="btn btn-primary btn-sm" style="color:white"><i class="pe-7s-refresh"></i> Ubah </a>
                                <a onClick="modalEditTriger( {{$debitur->id}} )" data-toggle="modal" href="" class="btn btn-info btn-sm" style="color:white"><i class="pe-7s-refresh"></i> Detail </a>
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
