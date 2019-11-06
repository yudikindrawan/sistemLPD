<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\transaksi;
use Response;
use PDF;
use View;

class ReportTransaksi extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return view('backend/report/indexreport');
    }

    public function tampil_data(Request $request){
        $inp = $request->input('awal');
        $inpp = $request->input('akhir');

        $trans = DB::table('transaksis')
            ->join('users', 'transaksis.users_id', '=', 'users.id')
            ->join('bungakredits', 'transaksis.bunga_id', '=', 'bungakredits.id')
            ->whereBetween('transaksis.created_at', [$inp,$inpp])
            ->select('transaksis.*', 'users.nama', 'bungakredits.jenis_bunga')
            ->get();
        return Response::json($trans);
    }
    public function cetak(Request $request, $awal, $akhir){
        $trans = DB::table('transaksis')
            ->join('users', 'transaksis.users_id', '=', 'users.id')
            ->join('bungakredits', 'transaksis.bunga_id', '=', 'bungakredits.id')
            ->whereBetween('transaksis.created_at', [$awal,$akhir])
            ->select('transaksis.*', 'users.nama', 'bungakredits.jenis_bunga')
            ->get();
        $pdf = PDF::loadview('backend/report/reportTransaksi', compact('trans','awal','akhir'));
        return $pdf->download('laporan-transaksi.pdf');
    }
}
