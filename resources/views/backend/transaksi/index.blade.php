@extends('layouts.master')
@section ('title', 'Data Bunga Kredit - Sistem Informasi Akutansi LPD Desa Tojan')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
            <div>Data Transaksi<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div></div>
        </div>
        <div class="page-title-actions">
                <div class="d-inline-block ">
                    <a href="{{ route('transaksi.create') }}"><button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-primary"><span class="btn-icon-wrapper pr-2 opacity-7"><i class="pe-7s-plus fa-w-20"></i></span>Tambah</button></a>
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
                            <th>No Transaksi</th>
                            <th>Nama</th>
                            <th>Tanggal Kredit</th>
                            <th>Jumlah Kredit</th>
                            <th>Angsuran Pokok</th>
                            <th>Jangka Waktu</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @php $i=0 @endphp
                        @foreach($transaksis as $transaksi)
                        @php $i++ @endphp
                        <tbody>
                            <td>{{$i}}</td>
                            <td>{{$transaksi->id}}</td>
                            <td>{{$transaksi->users_id}}</td>
                            <td>{{$transaksi->created_at}}</td>
                            <td>{{$transaksi->jumlah_kredit}}</td>
                            <td>{{$transaksi->angsuran_pokok}}</td>
                            <td>{{$transaksi->jangka_waktu}}</td>
                            <td style="white-space: nowrap; ">
                            <!-- <a href="{{ route('transaksi.edit', $transaksi->id)}}" class="btn btn-info btn-sm" style="color:white"><i class="pe-7s-refresh"></i> Ubah </a> -->
                            <a data-toggle="modal" data-target="#exampleModal" data-hapus="{{ $transaksi->id }}" title="Delete" class="btn btn-danger btn-sm" style="color:white"><i class="pe-7s-trash"></i></a>

                            <a onClick="modaldetailTriger('{{$transaksi->id}}')" data-toggle="modal" href="" class="btn btn-info btn-sm" style="color:white"><i class="pe-7s-note2"></i> Detail </a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form action="transaksi/delete" method="post">
    {{ csrf_field() }}
        {{ method_field('delete') }}
        <div class="modal-content">
        <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLabel">Yakin ingin membatalkan transaksi transaksi?</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <input type="hidden" name="delete" id="delete"/>

        <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Batal</button>
        </div>
        </div>
        </form>
    </div>
</div>

<div class="modalKu"></div>
<script>
    // MODAL EDIT
    function modalEditTriger(id){
        jQuery.noConflict();
        $.ajax({
            url     : "{{ route('edituser') }}",
            method  : 'get',
            data    : {
            'id' : id
            },
            success : function(response){
            // console.log(response);
                $('.modalKu').html(response);
                $('#editModal').modal({ backdrop: 'static', keyboard: false });
            }
        });
    }
        // MODAL EDIT
        function modaldetailTriger(id){
            jQuery.noConflict();
            $.ajax({
                url     : "{{ route('transaksi-detail') }}",
                method  : 'get',
                data    : {
                'id' : id
                },
                success : function(response){
                // console.log(response);
                    $('.modalKu').html(response);
                    $('#detailtransaksi').modal({ backdrop: 'static', keyboard: false });
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
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('hapus')
    var modal = $(this)
    modal.find('#delete').val(id)
    })
</script>

@endpush
