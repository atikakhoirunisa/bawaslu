<?php

namespace App\Exports;

use App\MonitoringModel;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class MonitoringExport implements FromView
{
    public function view(): View
    {
        $monitoring['monitoring'] = MonitoringModel::all();
        return view('monitoring.cetak_excelMonitoring',$monitoring);
    }
}
