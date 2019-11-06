<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\debitur;
use Response;
use PDF;
use View;

class ReportDebiturController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
      return view('backend/reportdebitur/index');
    }

    public function tampil_data(Request $request){
      $inp = $request->input('awal');
      $inpp = $request->input('akhir');

      $deb = DB::table('debiturs')
        ->join('users', 'debiturs.user_id' ,'=', 'users.id')
        ->whereBetween('debiturs.created_at', [$inp,$inpp])
        ->select('debiturs.*','users.*')
        ->get();
      return Response::json($deb);
    }

    public function cetak(Request $request, $awal, $akhir){
      $deb = DB::table('debiturs')
        ->join('users', 'debiturs.user_id' ,'=', 'users.id')
        ->whereBetween('debiturs.created_at', [$awal,$akhir])
        ->select('debiturs.*','users.*')
        ->get();
      $pdf = PDF::loadview('backend/reportdebitur/debiturcetak', compact('deb','awal','akhir'));
      return $pdf->download('laporan-debiturs.pdf');
    }
}
