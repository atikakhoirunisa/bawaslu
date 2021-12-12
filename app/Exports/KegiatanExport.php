<?php

namespace App\Exports;

use App\KegiatanModel;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class KegiatanExport implements FromView
{
    public function view(): View
    {
        $kegiatan['kegiatan'] = KegiatanModel::all();
        return view('kegiatan.cetak_excelKegiatan',$kegiatan);
    }
}
