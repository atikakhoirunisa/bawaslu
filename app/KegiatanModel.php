<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KegiatanModel;

class KegiatanModel extends Model
{
    protected $table 	= 'kegiatan';
    public $timestamps 	= true;
    protected $primaryKey = 'id_kegiatan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_kegiatan','kategori','nama_penanggung','tingkat_pengawas','kabupaten', 'kecamatan','notulis','sasaran_kegiatan','tanggal_kegiatan','waktu_kegiatan','lokasi_kegiatan','uraian_kegiatan','file','file1'
    ];

    // protected $primaryKey = 'id_kegiatan';
    public $incrementing = true;
}