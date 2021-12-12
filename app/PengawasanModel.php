<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PengawasanModel;

class PengawasanModel extends Model
{
    protected $table 	= 'pengawasan';
    public $timestamps 	= true;
    protected $primaryKey = 'id_pengawasan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pengawasan','nama_pengawas','jabatan_pengawas', 'poin_surat','alamat_pengawas', 'kabupaten', 'kecamatan', 'tahap_pengawasan','bentuk', 'pihak', 'tanggal_pengawasan', 'waktu_mulai', 'waktu_selesai', 'tempat_pengawasan', 'uraian_pengawasan', 'file_pengawasan', 'dugaan_pelanggaran', 'kategori', 'tempat_pelanggaran', 'waktu_pelanggaran', 'nama_pelanggaran', 'status_pelaku', 'uraian_pelanggaran', 'saksi1', 'saksi2', 'bukti_pelanggaran'
    ];

    // protected $primaryKey = 'id_pengawas';
    public $incrementing = true;
}
