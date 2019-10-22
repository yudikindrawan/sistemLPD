<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //
    protected $table = 'transaksis';
    
    protected $fillable = [
        'id',
        'users_id',
        'bunga_id',
        'tanggal_kredit',
        'jaminan',
        'jangka_waktu',
        'jumlah_kredit',
        'angsuran_pokok',
        'biaya_bunga',
        'total',
        'biaya_admin',
        'biaya_materai'];
        
    public $incrementing = false;

    public function angsuran(){
        return $This->hasMany(angusuran::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function bungakredit(){
        return $this->belongsTo(bungakredit::class);
    }
}
