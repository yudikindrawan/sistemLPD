<div class="modal fade bd-example-modal-xl" id="detailtransaksi" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Transaksi Kredit</h5>
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
                        <th>Nama Debitur</th>
                        <th>Jenis Bunga</th>
                        <th>Tanggal Kredit</th>
                        <th>Jangka Waktu</th>
                        <th>Jumlah Kredit</th>
                        <th>Angsuran Pokok</th>
                        <th>Biaya Bunga</th>
                        <th>Total</th>
                        <th>Biaya Admin</th>
                        <th>Biaya Materai</th>
                    </tr>
                    </thead>
                    <tbody>
                        <td>{{ $transaksi->id}}</td>
                        <td>{{ $transaksi->User->nama}}</td>
                        <td>{{ $transaksi->bungakredit->jenis_bunga}}</td>
                        <td>{{ $transaksi->tanggal_kredit}}</td>
                        <td>{{ $transaksi->jangka_waktu}} Bulan</td>
                        <td>Rp.{{ number_format( $transaksi->jumlah_kredit,2) }}</td>
                        <td>Rp.{{ number_format( $transaksi->angsuran_pokok,2) }}</td>
                        <td>Rp.{{ number_format( $transaksi->biaya_bunga,2) }}</td>
                        <td>Rp.{{ number_format( $transaksi->total,2) }}</td>
                        <td>Rp.{{ number_format( $transaksi->biaya_admin,2) }}</td>
                        <td>Rp.{{ number_format( $transaksi->biaya_materai,2) }}</td>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a href="{{route('cetak-bukti-transfer', $transaksi->id)}}" class="btn btn-primary btn-lg">Cetak Bukti Transaksi</a>
            </div>
        </div>
    </div>
</div>
