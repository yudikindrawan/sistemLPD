<?php

namespace App\Http\Controllers;

use App\debitur;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;

class DebiturController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('roles:PegawaiLPD');
    }

    public function index()
    {
        $debiturs = User::whereHas('roles', function(Builder $query){
            $query->where('nama_roles', '=', 'Kreditur' );
        })->get();
        $detail_debit = debitur::all();

        $deb = DB::table('debiturs')
            ->join('users', 'debiturs.user_id', '=', 'users.id')
            ->select('debiturs.*','users.*')
            ->get();

        return view('backend/debitur/index', compact('debiturs','detail_debit','deb'));
    }

    public function create(){
        $debiturs = debitur::all();
        return view('backend/debitur/add', compact('debiturs'));
    }

    public function store(Request $request){
        $users = user::create([
            'roles_id' => 3,
            'nama' => $request->nama,
            'username' => $request->email,
            'password' => bcrypt($request->username),
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'status' => 'active',
            'email' => $request->email,
            'no_telp' => $request->no_telp,
        ]);
        $debiturs = debitur::create([
            'user_id' => $users->id,
            'no_ktp' => $request->no_ktp,
            'pekerjaan' => $request->pekerjaan,
        ]);
        toastr()->success('Data berhasih ditambah', 'Pesan berhasil');
        return redirect()->route('debitur.index');
    }

    public function show(debitur $debitur){
        $debiturs = User::find($id);
        $detail_debit = debitur::all();
        return view('backend/debitur/ubah', compact('debiturs','detail_debit','deb'));
    }

    public function detail(Request $request){
        $devbiturs = User::find($request->id);
        $detail_debit = debitur::all();

        $deb = debitur::select('debiturs.*','users.*')
            ->join('users', 'debiturs.user_id', '=', 'users.id')
            ->where('users.id', $request->id)
            ->first();
        return view('backend/debitur/detail', compact('debiturs','detail_debit','deb'));
    }

    public function edit($id){
        $deb = debitur::select('debiturs.*','users.*')
            ->join('users', 'debiturs.user_id', '=', 'users.id')
            ->where('users.id', $id)
            ->first();
        return view('backend/debitur/ubah', compact('deb'));
    }

    public function update(Request $request, $id){
        $debiturs = User::find($id);
        $request->merge(['username' => $request->email]);
        $debiturs->fill($request->all())->save();

        toastr()->success('Data berhasih diubah', 'Pesan berhasil');
        return redirect()->route('debitur.index');
    }
    
    public function destroy(debitur $debitur)    {

    }
}
