<div class="modal fade bd-example-modal-xl" id="detailtransaksi" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Pembayaran Angsuran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="detail" id="detail"/>
                <table id="zero_config" class="table table-borderd table-striped">
                    <thead>
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
                        <td>{{$angsurans->transaksi_id}}</td>
                        <td>{{$angsurans->tanggal_pembayaran}}</td>
                        <td>Rp.{{ number_format($angsurans->jumlah_pembayaran,2)}}</td>
                        <td>Rp.{{ number_format($angsurans->sisa_pembayaran,2)}}</td>
                        {{-- <td>{{$angsuran->pembayaran_bunga}}</td>
                        <td>{{$angsuran->pembayaran_denda}}</td>
                        <td>{{$angsuran->sisa_kredit}}</td>
                        <td>{{$angsuran->angsuran}}</td> --}}
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a href="{{route('cetak-bukti-angsuran', $angsurans->id)}}" class="btn btn-primary btn-lg">Cetak Bukti Pembayaran Angsuran</a>
            </div>
        </div>
    </div>
</div>
