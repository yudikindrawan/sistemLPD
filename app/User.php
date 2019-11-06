<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Alfa6661\AutoNumber\AutoNumberTrait;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'roles_id',
        'nama',
        'email',
        'password',
        'username',
        'no_telp',
        'tempat_lahir',
        'tanggal_lahir',
        'foto',
        'jk'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this->belongsTo(roles::class, 'roles_id');
    }
    public function angsuran(){
        return $this->hasMany(angsuran::class);
    }
    public function transaksi(){
        return $this->hasMany('App\transaksi','users_id');
    }
    public function debitur(){
        return $this->hasOne(debitur::class);
    }
    public function hasRole($role){
        if($this->roles->nama_roles == $role){
            return true;
        }
    }
}
