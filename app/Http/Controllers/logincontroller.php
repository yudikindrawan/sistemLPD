<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\roles;
Use Alert;
use Auth;


class logincontroller extends Controller
{
  //
    public function __construct(){
        $this->middleware('guest');
    }

    public function getlogin(){
        return view('login');
    }

    public function postLogin(Request $data){
        if(Auth::attempt(['username' => $data->username, 'password' => $data->password])){
            if(Auth::user()->roles->nama_roles === 'Admin'){
                toastr()->success('Selamat ya anda Berhasil log in!', 'Hoorayy!');
                return redirect(route('dashboard'));
            }
            elseif(Auth::user()->roles->nama_roles === 'PegawaiLPD'){
                toastr()->success('Selamat ya anda Berhasil log in!', 'Hoorayy!');
                return redirect(route('dashboard'));
            }
            elseif(Auth::user()->roles->nama_roles === 'KetuaLPD'){
                toastr()->success('Selamat ya anda Berhasil log in!', 'Hoorayy!');
                return redirect(route('dashboard'));
            }
            elseif(Auth::user()->roles->nama_roles === 'Kreditur'){
                toastr()->success('Selamat ya anda Berhasil log in!', 'Hoorayy!');
                return redirect(route('dashboard'));
            }
            else{
                return redirect(route('logout'));
            }
        }else{
            toastr()->error('Hhmm maaf ya anda kurang beruntung!', 'Tak ku sangka ini harus terjadi');
            return redirect(route('login'));
        }
    }
}
