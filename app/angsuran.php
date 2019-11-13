<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class angsuran extends Model
{
    //
    protected $table = 'angsurans';
    protected $fillable = [
        'transaksi_id',
        'users_id',
        'tanggal_pembayaran',
        'jumlah_pembayaran',
        'sisa_pembayaran',
        'pembayaran_bunga',
        'pembayaran_denda',
        'sisa_kredit',
        'angsuran'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function transaksi(){
        return $this->belongsTo(transaksi::class);
    }
}
