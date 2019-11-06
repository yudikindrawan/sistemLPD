<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\angsuran;
use App\transaksi;
use Response;
use PDF;
use View;
class ReportAngsuranController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
      return view('backend/reportangsuran/index');
    }
    public function tampil_data(Request $request){
      $inp = $request->input('awal');
      $inpp = $request->input('akhir');

      $angsuran = DB::table('angsurans')
      ->whereBetween('angsurans.created_at', [$inp,$inpp])
      ->select('angsurans.*')
      ->get();
      return Response::json($angsuran);
    }
    public function cetak(Request $request, $awal, $akhir){
      $angsuran = DB::table('angsurans')
      ->whereBetween('angsurans.created_at', [$awal,$akhir])
      ->select('angsurans.*')
      ->get();

      $pdf = PDF::loadview('backend/reportangsuran/reportangsuran', compact('angsuran','awal','akhir'));
      return $pdf->download('laporan-angsurans.pdf');
    }
}
