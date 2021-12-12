<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PencegahanModel;

class PencegahanModel extends Model
{
    protected $table    = 'pencegahan';
    public $timestamps  = true;
    protected $primaryKey = 'id_pencegahan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pencegahan', 'kategori_pencegahan', 'nama_pengawas', 'kabupaten', 'kecamatan', 'jabatan', 'sasaran_pencegahan', 'tanggal_pencegahan', 'waktu_pencegahan', 'tempat_pencegahan', 'uraian_pencegahan', 'nama_file', 'file_pencegahan', 'file_pendukung '
    ];

    // protected $primaryKey = 'id_pengawas';
    public $incrementing = true;
}
