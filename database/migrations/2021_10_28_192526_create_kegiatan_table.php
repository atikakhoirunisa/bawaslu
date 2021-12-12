<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->string('kategori_kegiatan', 50);
            $table->string('nama_penanggung', 150);
            $table->string('kabupaten', 50);
            $table->string('kecamatan', 50);
            $table->text('notulis');
            $table->string('sasaran_kegiatan', 200);
            $table->datetime('tanggal_kegiatan');
            $table->time('waktu_kegiatan');
            $table->string('lokasi_kegiatan', 200);
            $table->text('uraian_kegiatan');
            $table->string('file');
            $table->string('file1');
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
        Schema::dropIfExists('kegiatan');
    }
}
