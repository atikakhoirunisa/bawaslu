<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoring', function (Blueprint $table) {
            $table->increments('id_monitoring');
            $table->string('kategori_media', 15);
            $table->string('kategori_berita', 15);
            $table->string('jenis_media', 15);
            $table->string('nama_media', 155);
            $table->string('judul_berita', 155);
            $table->string('nama_pengawas', 155);
            $table->string('penanggungjawab', 155);
            $table->datetime('tanggal_penayangan');
            $table->time('waktu_monitoring');
            $table->string('file');
            $table->string('file1');
            $table->string('link');
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
        Schema::dropIfExists('monitoring');
    }
}
