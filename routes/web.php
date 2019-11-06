<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('cetak-test', function () {
    return view('backend/transaksi/cetakBuktiTransaksi');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'dashboardcontroller@index')->name('dashboard');
Auth::routes();
// Login Route
Route::get('login', 'logincontroller@getlogin')->name('login');
Route::post('postlogin', 'logincontroller@postLogin')->name('postlogin');
// Logout Route
Route::get('/modal_logout', 'logoutcontroller@getlogout')->name('modal_logout');
Route::get('/logout', 'logoutcontroller@logout')->name('logout');
// datauser
Route::resource('datauser', 'userscontroller');
Route::get('user-ubah', 'userscontroller@ubah')->name('edituser');
Route::post('ubah-profile/{id}', 'userscontroller@ubahprofile')->name('datauser.profile');
Route::get('detail/{id}', 'userscontroller@detail')->name('datauser.detail');
Route::post('passwordUbah', 'ubahpasswordcontroller@changePass')->name('changePassword');
Route::get('ubah', 'ubahpasswordcontroller@change')->name('changepass');


// bunga kredit
Route::resource('bunga', 'BungakreditController');

// Debitur
Route::resource('debitur', 'DebiturController');
Route::get('debitur-detail', 'DebiturController@detail')->name('debitur-detail');

// Angsuran
Route::resource('angsuran', 'AngsuranController');
Route::get('/cari-transaksi', 'AngsuranController@cariTransaksi')->name('cari-transaksi');
Route::get('/angsuran-detai','AngsuranController@detailAngsuran')->name('angsuran-detail');
Route::delete('angsuran/delete', 'AngsuranController@destroy');
Route::get('/cetak-bukti-angsuran/{id}', 'AngsuranController@cetakBuktiAngsuran')->name('cetak-bukti-angsuran');

//transaksi
Route::resource('transaksi', 'TransaksiController');
Route::get('caribunga', 'TransaksiController@caribunga')->name('caribunga');
Route::delete('transaksi/delete', 'TransaksiController@destroy');
Route::get('transaksi-detail', 'TransaksiController@detail')->name('transaksi-detail');
Route::get('/cetak-bukti-transfer/{id}', 'TransaksiController@cetakBuktiTransaksi')->name('cetak-bukti-transfer');

Route::get('/index-report','ReportTransaksi@index')->name('index-report');
Route::post('/cetak-view','ReportTransaksi@tampil_data')->name('laporan_tampil');
Route::get('/print/{awal}/{akhir}','ReportTransaksi@cetak')->name('laporan_cetak');

Route::get('/index-report-debitur', 'ReportDebiturController@index')->name('index-report-debitur');
Route::post('/tampil-debitur', 'ReportDebiturController@tampil_data')->name('laporan-debitur-tampil');
Route::get('/print-debitur/{awal}/{akhir}','ReportDebiturController@cetak')->name('laporan-debitur-cetak');

Route::get('/index-report-angsuran', 'ReportAngsuranController@index')->name('index-report-angsuran');
Route::post('/tampil-angsuran', 'ReportAngsuranController@tampil_data')->name('laporan-angsuran-tampil');
Route::get('/print-angsuran/{awal}/{akhir}','ReportAngsuranController@cetak')->name('laporan-angsuran-cetak');
