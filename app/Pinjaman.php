<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $primarykey = 'id_pinjaman';
    protected $table = 'pinjamen';
    protected $fillable = [
        'id_pinjaman','id_anggota','tgl_pinjaman','pinjaman','jml_pinjaman'
    ];
}
