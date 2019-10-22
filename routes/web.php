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
Route::get('ubah-profile', 'usercontroller@ubahprofile')->name('datauser.profile');
Route::get('detail/{id}', 'userscontroller@detail')->name('datauser.detail');

// bunga kredit 
Route::resource('bunga', 'BungakreditController');

// Debitur
Route::resource('debitur', 'DebiturController');
Route::get('debitur-detail', 'DebiturController@detail')->name('detail-debitur');

// Angsuran 
Route::resource('angsuran', 'AngsuranController');
Route::get('/cari-transaksi', 'AngsuranController@cariTransaksi')->name('cari-transaksi');
// Route::get('/sisa-pinjaman/{transaksi}/{jangka_waktu}', 'AngsuranController@getSisaPinjaman')->name('sisa-pinjaman');

//transaksi
Route::resource('transaksi', 'TransaksiController');
Route::get('caribunga', 'TransaksiController@caribunga')->name('caribunga');
// Route::get('/total-angsuran/{transaksi}/{biayabunga}', 'TransaksiController@getTotal')->name('total-angsuran');

// Route::get('/biaya_pokok/{transaksi}/{biayabunga}', function(){return Response()->json('test');});

// Route::get('/biaya_bunga/{transaksi}/{bunga}/{waktu}', 'TransaksiController@getBungaFlat')->name('biaya-bunga');

