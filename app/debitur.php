<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class debitur extends Model
{
    //
    protected $table = 'debiturs';
    protected $fillable = [
        'user_id',
        'no_ktp',
        'pekerjaan',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
