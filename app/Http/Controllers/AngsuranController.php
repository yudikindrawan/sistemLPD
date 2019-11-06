<?php

namespace App\Http\Controllers;

use App\angsuran;
use App\transaksi;
use App\User;
use App\bungakredit;
use Response;
use Illuminate\Http\Request;
use DB;
use PDF;
use Carbon\Carbon;

class AngsuranController extends Controller
{
    public function index(){
        $angsurans = angsuran::all();
        $transaksi = transaksi::all();
        return view('backend/angsuran/index', compact('angsurans','transaksi'));
    }

    public function cariTransaksi(Request $request){
        $transaksi = transaksi::select('jumlah_kredit','biaya_bunga','total','jangka_waktu','angsuran_pokok','tanggal_kredit','users.nama')
        ->join('users','transaksis.users_id','=','users.id')
        ->where('transaksis.id', $request->id)
        ->first();
        return Response()->json($transaksi);
    }

    public function create(){
        $angsurans = angsuran::all();
        $transaksi = transaksi::all();
        return view('backend/angsuran/add', compact('angsurans','transaksi'));
    }

    public function store(Request $req){
        $angsuran = new angsuran;
        $angsuran->transaksi_id = $req->no_transaksi;

        $kr = transaksi::select('jumlah_kredit')->where('id', $req->no_transaksi)->first();
        // if ($angsuran->) {
        //   // code...
        // }
            $angsuran->tanggal_pembayaran = $req->input('tanggal_pembayaran');
            $angsuran->jumlah_pembayaran = $req->jumlah_pembayaran;
            $angsuran->sisa_pembayaran = $req->sisa_pembayaran;
            $angsuran->pembayaran_bunga = $req->jumlah_bunga;
            $angsuran->pembayaran_denda = $req->denda;
            $angsuran->sisa_kredit = $req->angsuran_pokok;
            $angsuran->angsuran = $req->angsuranKe;

            $transaksi=DB::table('transaksis')->select('jumlah_kredit','tanggal_kredit')
            ->where('id', $req->no_transaksi)
            ->update(['jumlah_kredit' => $kr['jumlah_kredit']-$req->angsuran_pokok,'tanggal_kredit' => Carbon::now()->addMonths(1)]);
            // dd($transaksi);
            $angsuran->save();

        toastr()->success('Data berhasil disimpan', 'Pesan berhasil');
        return redirect()->back();


        // $angsuran = angsuran::create([
        //   'transaksi_id' => $request->no_transaksi,
        //   'tanggal_pembayaran' => $request->tanggal_kredit,
        //   'jumlah_pembayaran' => $request->total_pembayaran,
        //   'sisa_pembayran' => $request->sisa_pinjaman,
        //   'pembayaran_bunga' => $request->jumlah_bunga,
        //   'pembayaran_denda' => $request->denda,
        //   'sisa_kredit' => $request->jumlah_kredit,
        //   'angsuran' => $request->angsuranKe,
        // ])->save();

    }

    public function detailAngsuran(Request $request){
        $angsurans = angsuran::find($request->id);
        $transaksi = transaksi::all();
        $user = User::all();
        $bunga = bungakredit::all();

        return view('backend/angsuran/detail', compact('angsurans','transaksi','user','bunga'));
    }

    public function show(angsuran $angsuran){
        //
    }

    public function edit(angsuran $angsuran){
        //
    }

    public function update(Request $request, angsuran $angsuran){
        //
    }

    public function destroy(Request $req){
        //
        DB::table("angsurans")->delete($req->delete);
        toastr()->success('Data berhasih dihapus', 'Pesan berhasil');
        return redirect()->route('angsuran.index');
    }

    public function cetakBuktiAngsuran(Request $request, $id){
        $angsuran = angsuran::find($id);
        $transaksi = transaksi::all();
        $users = User::all();

        $customPaper = array(0,0,560,480);
        $pdf = PDF::loadview('backend/angsuran/cetakBuktiAngsuran', compact('angsuran','users','transaksi'))->setPaper($customPaper, 'potrait');
        return $pdf->download('Cetak-bukti-transfer.pdf');

    }
}
