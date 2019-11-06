<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\roles;
use Auth;

class userscontroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('roles:KetuaLPD');
    }

    public function index(){
        $users = user::all();
        $roles = roles::all();
        return view('backend/datauser/index', compact('users','roles'));
    }

    public function create(){
        $users = user::all();
        $roles = roles::all();
        return view('backend/datauser/add', compact('users','roles'));
    }

    public function store(Request $request){
        $request->validate([
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $users = user::create([
            'roles_id' => $request->roles_id,
            'nama' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->username),
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'status' => 'active',
            'email' => $request->email,
            'no_telp' => $request->no_telp,
        ])->save();

        toastr()->success('Data berhasih ditambah', 'Pesan berhasil');
        return redirect('datauser');
    }

    public function show($id){

    }

    public function edit(Request $request, $id){
        $users = user::find($id);
        $roles = roles::all();
        return view('backend/datauser/ubah', compact('users','roles'));
    }

    public function ubah(Request $request){
        $users = user::find($request->id);
        $roles = roles::all();
        return view('backend/datauser/reset', compact('users','roles'));
    }

    public function update(Request $request, $id){
        $user = user::find($id);
        $user->username = $request->username;
        $user->password = bcrypt($request->username);
            if($user->save()){
                toastr()->success('Data berhasih diperbaharui', 'Pesan berhasil');
                return redirect('datauser');
            }else{
                toastr()->error('Data gagal diperbaharui', 'Pesan Gagal');
                return redirect('datauser');
            }
    }

    public function destroy($id){

    }

    public function ubahprofile(Request $request, $id){
        $users = user::find($id);
        $users->nama = $request->name;
        $users->username = $request->username;
        $users->roles_id = $request->roles_id;
        $users->tempat_lahir = $request->tempat_lahir;
        $users->tanggal_lahir = $request->tanggal_lahir;
        $users->jk = $request->jk;
        $users->email = $request->email;
        $users->no_telp = $request->no_telp;
        $users->save();
        toastr()->success('Data berhasih diubah', 'Pesan berhasil');
        return redirect()->route('datauser.index');
    }

    public function detail(Request $request, $id){
        $users = user::find($id);
        $roles = roles::all();
        return view('backend/datauser/detail', compact('users','roles'));
    }
}
