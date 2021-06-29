<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $primaryKey = 'id_simpanan';
    protected $table = 'simpanans';
    protected $fillable = [ 'id_simpanan','id_anggota','tgl_simpanan','simpanan','jml_simpanan' ];
}
