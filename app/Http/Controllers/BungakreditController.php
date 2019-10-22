<?php

namespace App\Http\Controllers;

use App\bungakredit;
use Illuminate\Http\Request;

class BungakreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bungas = bungakredit::all();
        return view('backend/bungakredit/index', compact('bungas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $bungas = bungakredit::all();
        return view('backend/bungakredit/add', compact('bungas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $bungas = bungakredit::create([
            'bunga' => $request->bunga,
            'jenis_bunga' => $request->jenis_bunga
        ])->save();
        
        toastr()->success('Data berhasih ditambah', 'Pesan berhasil');
        return redirect('bunga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bungakredit  $bungakredit
     * @return \Illuminate\Http\Response
     */
    public function show(bungakredit $bungakredit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bungakredit  $bungakredit
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $bungas = bungakredit::findOrFail($id);
        return view('backend/bungakredit/ubah', compact('bungas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bungakredit  $bungakredit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bungakredit $bungakredit, $id)
    {
        //
        $bungas = bungakredit::find($id);
        $bungas->bunga = $request->bunga;
        $bungas->jenis_bunga = $request->jenis_bunga;
        $bungas->save();

        toastr()->success('Data berhasih diperbaharui', 'Pesan berhasil');
        return redirect('bunga');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bungakredit  $bungakredit
     * @return \Illuminate\Http\Response
     */
    public function destroy(bungakredit $bungakredit)
    {
        //
    }
}
