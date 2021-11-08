<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftarakuntansi extends Model
{
    protected $table = 'daftarakun';
    protected $fillable = ['kode_akun','nama_akun','kategori_akun','sub_akun','saldo'];
}
