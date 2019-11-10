<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\roles;
use App\transaksi;
use App\debitur;
use App\angsuran;
use Auth;
use DB;

class dashboardcontroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index() {
        $users = user::whereHas('roles', function($q){
            $q->where('nama_roles', 'Kreditur');
        })->get();
        $transaksi = transaksi::all();
        $debitur = debitur::all();
        $angsuran = angsuran::all();
        return view('backend/index', compact('transaksi','debitur','angsuran'));
    }

    public function infoDeb(Request $req){
        $user = transaksi::select('users_id')->first();

        $infoDeb = DB::table('transaksis')
        ->join('users', 'transaksis.users_id', '=', 'users.id')
        ->select('transaksis.*','users.*')
        ->where('users_id', '=', Auth::user()->id)
        ->first();

        $getA = transaksi::select('transaksis.*', 'angsurans.*')
        ->join('angsurans', 'transaksis.id', '=', 'angsurans.transaksi_id')
        // ->where('transaksi_id')
        ->get();
      // dd($getA);

        return view('backend/debitur/info', compact('infoDeb','getA'));
    }

    public function showInfoDeb(Request $req){
        $infoDeb = DB::table('transaksis')
        ->join('users', 'konselings.users.id', '=', 'users.id')
        ->select('konselings.*','users.*')
        ->where('users_id', '=', Auth::user())
        ->get();

        return view('backend/debitur/info', compact('infoDeb'));
    }

    public function FaQ(){
        return view('backend/debitur/FaQ');
    }

    public function create(){

    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
