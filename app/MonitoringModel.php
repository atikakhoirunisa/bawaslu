<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MonitoringModel;

class MonitoringModel extends Model
{
    protected $table    = 'monitoring';
    public $timestamps  = true;
    protected $primaryKey = 'id_monitoring';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_monitoring','kategori_media','kategori_berita','jenis_media','nama_media','judul_berita','nama_pengawas','penanggungjawab','tanggal_penayangan','waktu_monitoring','file', 'file1', 'link'
    ];

    // protected $primaryKey = 'id_pengawas';
    public $incrementing = true;
}
