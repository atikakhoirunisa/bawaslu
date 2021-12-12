<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencegahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencegahan', function (Blueprint $table) {
            $table->increments('id_pencegahan');
            $table->string('nama_pengawas',115);
            $table->string('instansi',115);
            $table->datetime('tanggal_pencegahan');
            $table->time('waktu_pencegahan');
            $table->string('tempat_pencegahan', 115);
            $table->text('uraian_pencegahan');
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
        Schema::dropIfExists('pencegahan');
    }
}
