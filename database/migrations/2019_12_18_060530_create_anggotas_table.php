<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->string('id_anggota');
        $table->string('nama');
        $table->date('tgl_gabung');
        $table->string('telp');
        $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
        $table->string('kota');
        $table->date('tgl_lahir');
        $table->string('pekerjaan');
        $table->string('alamat');
        $table->primary('id_anggota');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
