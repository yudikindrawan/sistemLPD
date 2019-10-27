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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $debiturs = debitur::all();
        return view('backend/debitur/add', compact('debiturs'));
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
        // $request->validate([
        //     'nama' => 'required',
        //     'username' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'jk' => 'required',
        //     'email' => 'required',
        //     'no_telp' => 'required',
        // ]);

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

    /**
     * Display the specified resource.
     *
     * @param  \App\debitur  $debitur
     * @return \Illuminate\Http\Response
     */
    public function show(debitur $debitur)
    {
        //
        $debiturs = User::find($id);
        $detail_debit = debitur::all();
        return view('backend/debitur/ubah', compact('debiturs','detail_debit','deb'));
    }

    public function detail(Request $request)
    {
        //
        $devbiturs = User::find($request->id);
        $detail_debit = debitur::all();

        $deb = debitur::select('debiturs.*','users.*')
            ->join('users', 'debiturs.user_id', '=', 'users.id')
            ->where('users.id', $request->id)
            ->first();
        return view('backend/debitur/detail', compact('debiturs','detail_debit','deb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\debitur  $debitur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $debiturs = User::find($id);
        // $detail_debit = debitur::all();
        $deb = debitur::select('debiturs.*','users.*')
            ->join('users', 'debiturs.user_id', '=', 'users.id')
            ->where('users.id', $id)
            ->first();
            // dd($deb);
        return view('backend/debitur/ubah', compact('deb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\debitur  $debitur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $debiturs = User::find($id);
        $request->merge(['username' => $request->email]);
        $debiturs->fill($request->all())->save();

        toastr()->success('Data berhasih diubah', 'Pesan berhasil');
        return redirect()->route('debitur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\debitur  $debitur
     * @return \Illuminate\Http\Response
     */
    public function destroy(debitur $debitur)
    {
        //
    }
}
