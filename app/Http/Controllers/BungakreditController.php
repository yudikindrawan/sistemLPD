<?php

namespace App\Http\Controllers;

use App\bungakredit;
use Illuminate\Http\Request;

class BungakreditController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('roles:PegawaiLPD');
    }

    public function index(){
        $bungas = bungakredit::all();
        return view('backend/bungakredit/index', compact('bungas'));
    }

    public function create(){
        $bungas = bungakredit::all();
        return view('backend/bungakredit/add', compact('bungas'));
    }

    public function store(Request $request){
        $bungas = bungakredit::create([
            'bunga' => $request->bunga,
            'jenis_bunga' => $request->jenis_bunga
        ])->save();

        toastr()->success('Data berhasih ditambah', 'Pesan berhasil');
        return redirect('bunga');
    }
    public function show(bungakredit $bungakredit){
        
    }
    
    public function edit(Request $request, $id){
        $bungas = bungakredit::findOrFail($id);
        return view('backend/bungakredit/ubah', compact('bungas'));
    }

    public function update(Request $request, bungakredit $bungakredit, $id){
        $bungas = bungakredit::find($id);
        $bungas->bunga = $request->bunga;
        $bungas->jenis_bunga = $request->jenis_bunga;
        $bungas->save();

        toastr()->success('Data berhasih diperbaharui', 'Pesan berhasil');
        return redirect('bunga');
    }

    public function destroy(bungakredit $bungakredit){

    }
}
