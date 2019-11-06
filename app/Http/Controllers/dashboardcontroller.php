<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\roles;
use App\transaksi;
use App\debitur;
use App\angsuran;
use Auth;

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

    public function infoDeb(){
        return view('backend/debitur/info');
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
