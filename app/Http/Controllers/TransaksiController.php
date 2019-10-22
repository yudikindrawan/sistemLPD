<?php

namespace App\Http\Controllers;

use App\transaksi;
use App\User;
use App\bungakredit;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksis = transaksi::all();
        $users = User::all();
        return view('backend/transaksi/index', compact('transaksis','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $transaksis = transaksi::all();
        // $transaksis = User::select('roles_id == 1')->first();
            // $transaksis = User::whereHas('roles', function($q){
            //     $q->where('nama_roles', 'PegawaiLPD');
            // })->get();

            $krediturs = User::whereHas('roles', function($q){
                $q->where('nama_roles', 'Kreditur');
            })->get();

        // $krediturs = User::select('roles_id == 3')->first();
        // $transaksis = transaksi::all();
        // $users = User::all();
        // $krediturs = user::all();
        $bungas = bungakredit::all();
        return view('backend/transaksi/add', compact('krediturs', 'bungas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['id' => 'TRNS'.rand(1,9999), 'tanggal_kredit' => Carbon::now()]);
        $kredit = transaksi::create($request->all());
        toastr()->success('Data berhasih ditambah', 'Pesan berhasil');
        return redirect()->route('transaksi.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $kredit = transaksi::find($id);
        $krediturs = User::whereHas('roles', function($q){
            $q->where('nama_roles', 'Kreditur');
        })->get();
        $bungas = bungakredit::all();
        return view('backend/transaksi/ubah', compact('kredit','krediturs','bungas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }

    public function caribunga(Request $request)
    {
        $p = bungakredit::select('bunga')->where('id',$request->id)->first();

        return Response()->json($p);
    }

    public function getTotal(transaksi $transaksi, $biayabunga){
        $total = $transaksi->angsuran_pokok + $biayabunga;

        return Response()->json(['total' => $total]);
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
