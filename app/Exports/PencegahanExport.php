<?php

namespace App\Exports;

use App\PencegahanModel;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class PencegahanExport implements FromView
{
    public function view(): View
    {
        $pencegahan['pencegahan'] = PencegahanModel::all();
        return view('pencegahan.cetak_excelPencegahan',$pencegahan);
    }
}