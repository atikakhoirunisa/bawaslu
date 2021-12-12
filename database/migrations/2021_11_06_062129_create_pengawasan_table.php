<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengawasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengawasan', function (Blueprint $table) {
            $table->increments('id_pengawasan');
            $table->string('nama_pengawas', 150);
            $table->string('jabatan_pengawas', 100);
            $table->string('poin_surat', 100);
            $table->string('alamat_pengawas', 200);
            $table->string('kabupaten', 50);
            $table->string('kecamatan', 100);
            $table->string('tahap_pengawasan', 150);
            $table->string('bentuk', 100);
            $table->string('pihak', 100);
            $table->date('tanggal_pengawasan');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('tempat_pengawasan', 200);
            $table->text('uraian_pengawasan');
            $table->string('file_pengawasan', 200);
            $table->string('dugaan_pelanggaran', 100);
            $table->string('kategori', 100);
            $table->string('tempat_pelanggaran', 200);
            $table->time('waktu_pelanggaran');
            $table->string('nama_pelanggaran', 150);
            $table->string('status_pelaku', 150);
            $table->text('uraian_pelanggaran');
            $table->string('saksi1', 150);
            $table->string('saksi2', 150);
            $table->string('bukti_pelanggaran', 500);
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
        Schema::dropIfExists('pengawasan');
    }
}
