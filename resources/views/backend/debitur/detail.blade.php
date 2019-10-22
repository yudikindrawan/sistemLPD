
<div class="modal fade bd-example-modal-lg" id="detail_debitur" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="formdetail" method="post">  
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Detail Data Debitur</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No KTP</th>
                            <th>E-mail</th>
                            <th>Jenis Kelamin</th>
                            <th>No Telepon</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Pekerjaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$debiturs->nama}}</td>
                            <td>{{$debiturs->debiturs->no_ktp}}</td>
                            <td>{{$debiturs->email}}</td>
                            <td>{{$debiturs->jk}}</td>
                            <td>{{$debiturs->no_telp}}</td>
                            <td>{{$debiturs->tempat_lahir}}</td>
                            <td>{{$debiturs->tanggal_lahir}}</td>
                            <td>{{$debiturs->debiturs->pekerjaan}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
  </div>
</div>