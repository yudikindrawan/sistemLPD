<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bungakredit extends Model
{
    //
    protected $table = 'bungakredits';
    protected $fillable = ['bunga','jenis_bunga'];

    public function transaksi(){
        return $this->hasMany(transaksi::class);
    }
}
