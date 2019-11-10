@extends('layouts.master')
@section ('title', 'FaQ - Sistem Informasi Akutansi LPD Desa Tojan')

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
        <div class="col-12">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <h5 class="card-header">Syarat dan Ketentuan Peminjaman </h5>
                    <div class="card-body">
                        <p class="card-text"> <b>Berikut ini syarat-syarat yang harus dipenuhi :</b></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Berstatus sebagai WNI</li>
                            <li class="list-group-item">Memiliki status sebagai anggota LPD atau calon anggota LPD</li>
                            <li class="list-group-item">Peminjam wajib mengisi formulir pinjaman</li>
                            <li class="list-group-item">Menyerahkan fotocopy KTP,  baik KTP suami ataupun istri bila sudah menikah</li>
                            <li class="list-group-item">Menyerahkan fotocopy KK, slip gaji, anggunan.</li>
                        </ul>
                        <br><p class="card-text">Setelah anda mengetahui beberapa syarat yang harus dipenuhi, selanjutnya anda harus mengetahui langkah-langkahnya. <br>berikut ini langkah-langkah untuk mendapat pinjaman pada LPD</p>
                        <p class="card-text">1. <b>Mendaftar menjadi anggota LPD</b></p>
                        <p class="card-text">Langkah awal yang harus anda lakukan adalah mendaftar sebagai anggota LPD. Caranya dengan menghubungi pegawai LPD, kemudian mengisi formulir pendaftaran. Selain itu, anda juga harus memenuhi berbagai syarat menjadi anggota LPD. Menjadi anggota LPD tidaklah merugikan. Karena anda akan mendapatkan berbagai manfaat mengikuti LPD.</p>
                        <p class="card-text">2. <b>Mengajukan pinjaman</b></p>
                        <p class="card-text">Setelah terdaftar sebagai anggota LPD, selanjutnya silahkan anda menyampaikan niat dan tujuan meminjam uang. Biasanya, LPD akan mudah memberikan pinjaman dana apabila anda memiliki usaha. Dana yang diberikan LPD juga kecil jika anda baru pertama kali meminjam. Namun jika sudah beberapa kali, LPD akan memberikan limit pinjaman yang cukup besar.</p>
                        <p class="card-text">3. <b>Memenuhi syarat peminjaman</b></p>
                        <p class="card-text">Langkah ketiga adalah anda harus memenuhi syarat-syarat yang diajukan oleh LPD. Antara lain: mengisi formulir, menyerahkan foto copy KTP, KK dll. Isilah data dengan benar dan jangan berbohong. Karena pihak koperasi akan mencari informasi untuk memastikan apakah anda layak mendapatkan pinjaman atau tidak. Akan lebih meyakinkan apabila anda memiliki saudara atau teman yang berkerja di LPD tersebut untuk merekomendasikan anda mendapat pinjaman.</p>
                        <p class="card-text">4. <b>Pencairan dana</b></p>
                        <p class="card-text">Inilah proses yang paling ditunggu. Setelah pihak LPD menyatakan anda layak mendapatkan pinjaman. Maka dana yang anda harapkan akan segera cair.</p>
                        <p class="card-text">5. <b>Pengangsuran pinjaman</b></p>
                        <p class="card-text">Setelah mendapatkan dana yang diinginkan, anda memiliki tanggungan untuk mengangsur pinjaman setiap bulan. Bunga yang diajukan setiap LPD berbeda-beda jadi pastikan anda menanyakan kepada pihak LPD. Anda tidak boleh menunggak cicilan agar nantinya ketika anda membutuhkan dana lagi, koperasi akan memprosesnya dengan cepat karena sudah percaya dengan anda. Saat ini, meminjam uang bukanlah hal yang memalukan. Namun alangkah baiknya jika anda mempersiapkan dana kebutuhan mendadak dimasa yang akan datang. Sehingga tidak perlu memiliki hutang. Meminjam di LPD adalah alternatif yang efektif jika memang sangat mendesak. Karena bunga LPD cukup rendah dari pada lembaga keuangan lainnya. Apalagi jika anda membutuhkan modal usaha.</p>

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
