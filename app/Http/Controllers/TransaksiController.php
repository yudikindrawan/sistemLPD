<?php

namespace App\Http\Controllers;

use App\transaksi;
use App\User;
use App\bungakredit;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use DB;
use PDF;

class TransaksiController extends Controller
{
    public function index(){
        $transaksis = transaksi::all();
        $users = User::all();
        return view('backend/transaksi/index', compact('transaksis','users'));
    }

    public function create()
    {
        $krediturs = User::whereHas('roles', function($q){
            $q->where('nama_roles', 'Kreditur');
        })->get();
        $bungas = bungakredit::all();
        return view('backend/transaksi/add', compact('krediturs', 'bungas'));
    }

    public function store(Request $request)
    {
        $request->merge(['id' => 'TRNS'.rand(1,9999)]);
        $kredit = transaksi::create($request->all());
        toastr()->success('Data berhasih ditambah', 'Pesan berhasil');
        return redirect()->route('transaksi.index');
    }

    public function show(Request $req){
        $transaksi = transaksi::select('transaksis.*','users.*','bungakredits.*')
        ->join('users','transaksis.users_id','=','users.id')
        ->join('bungakredits','transaksis.bunga_id','=','bungakredits.id')
        ->where('transaksis.id', $req->id)
        ->first();

        dd($transaksi);

        return view('backend/transaksi/detail', compact('transaksi','user','bunga'));
    }

    public function detail(Request $request){
        $transaksi = transaksi::find($request->id);
        $user = user::all();
        $bunga = bungakredit::all();

        return view('backend/transaksi/detail', compact('transaksi','user','bunga'));
    }

    public function edit($id){
        $kredit = transaksi::find($id);
        $krediturs = User::whereHas('roles', function($q){
            $q->where('nama_roles', 'Kreditur');
        })->get();

        $bungas = bungakredit::all();
        return view('backend/transaksi/ubah', compact('kredit','krediturs','bungas'));
    }

    public function update(Request $request, $id){
        $kredit = transaksi::find($id);
        $kredit->fill($request->all())->save();
        toastr()->success('Data berhasih diubah', 'Pesan berhasil');
        return redirect()->route('transaksi.index');
    }

    public function destroy(Request $req){
        DB::table("transaksis")->delete($req->delete);
        toastr()->success('Data berhasih dihapus', 'Pesan berhasil');
        return redirect()->route('transaksi.index');
    }

    public function caribunga(Request $request) {
        $p = bungakredit::select('bunga')->where('id',$request->id)->first();

        return Response()->json($p);
    }

    public function getTotal(transaksi $transaksi, $biayabunga){
        $total = $transaksi->angsuran_pokok + $biayabunga;
        return Response()->json(['total' => $total]);
    }

    public function cetakBuktiTransaksi(Request $request, $id){
        $transaksi = transaksi::find($id);
        $users = User::all();
        $customPaper = array(0,0,660,560);
        $pdf = PDF::loadview('backend/transaksi/cetakBuktiTransaksi', compact('transaksi','users'))->setPaper($customPaper, 'potrait');
        return $pdf->download('Cetak-bukti-transfer.pdf');

    }
    // public function flat(transaksi $transaksi, $waktu)
    // {
    //     $hitPokok = $transaksi->jumlah_kredit / $waktu;

    //     return Response()->json(['angsuran_pokok' => $hitPokok]);
    // }

    // public function getBungaFlat(transaksi $transaksi, $bunga, $waktu)
    // {
    //     $hitBunga = $transaksi->jumlah_kredit * $bunga / $waktu;

    //     return Response()->json(['biaya_bunga' => $hitBunga]);
    // }
}
