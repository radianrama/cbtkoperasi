<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $primarykey = 'id_anggota';
    protected $table = 'anggotas';
    protected $fillable =[
        'id_anggota','nama','tgl_gabung','telp','jenis_kelamin','kota','tgl_lahir','pekerjaan','alamat'
    ];
}
