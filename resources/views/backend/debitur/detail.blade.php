<div class="modal fade bd-example-modal-xl" id="detaildebiturs" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Debitur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="zero_config" class="table table-borderd table-striped">
                    <thead>
                    <tr>
                        <th>Nama Debitur</th>
                        <th>No KTP</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telepon</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pekerjaan</th>
                    </tr>
                    </thead>
                    <tbody>
                        <td>{{ $deb->nama}}</td>
                        <td>{{ $deb->no_ktp}}</td>
                        <td>{{ $deb->email}}</td>
                        <td>{{ $deb->jk}}</td>
                        <td>{{ $deb->no_telp}}</td>
                        <td>{{ $deb->tempat_lahir}}</td>
                        <td>{{ $deb->tanggal_lahir}}</td>
                        <td>{{ $deb->pekerjaan}}</td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>