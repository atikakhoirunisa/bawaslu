<?php

namespace App\Exports;

use App\PengawasanModel;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class PengawasanExport implements FromView
{
    public function view(): View
    {
        $pengawasan['pengawasan'] = PengawasanModel::all();
        return view('pengawasan.cetak_excelPengawasan',$pengawasan);
    }
}
