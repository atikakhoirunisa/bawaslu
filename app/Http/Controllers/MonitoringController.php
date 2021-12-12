<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\MonitoringExport;
use App\Http\Controllers\Controller;
use App\MonitoringModel;
use Maatwebsite\Excel\Facades\Excel;


class MonitoringController extends Controller
{
    public function index()
    {
        $data_monitoring = DB::table('monitoring')->get();

        //return $data_monitoring;
        return view('monitoring.data_monitoring', ['data_monitoring' => $data_monitoring]);
    }

    public function add()
    {
        return view('monitoring.form_monitoring');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'judul_berita' => 'required',
                'nama_media' => 'required'

            ],
            [
                'judul_berita.required' => 'judul berita tidak boleh kosong!!!',
                'nama_media.required' => 'nama media tidak boleh kosong!!!'
            ]
        );
        $monitoring = new MonitoringModel();
        $monitoring->kategori_media     = $request->kategori_media;
        $monitoring->kategori_berita    = $request->kategori_berita;
        $monitoring->jenis_media        = $request->jenis_media;
        $monitoring->nama_media         = $request->nama_media;
        $monitoring->judul_berita       = $request->judul_berita;
        $monitoring->nama_pengawas      = $request->nama_pengawas;
        $monitoring->penanggungjawab    = $request->penanggungjawab;
        $monitoring->tanggal_penayangan = $request->tanggal_penayangan;
        $monitoring->waktu_monitoring   = $request->waktu_monitoring;
        $file               = $request->file('file')->store('file');
        $monitoring->link               = $request->link;

        $fileName = time() . '_monitoring_' . $request->file->getClientOriginalName();
        $request->file->move(public_path('upload_monitoring'), $fileName);
        $monitoring->file = $fileName;
        $monitoring->file1 = $fileName;
        $monitoring->save();

        return redirect()->route('monitoring.index');
    }

    public function edit($id_monitoring)
    {
        $data_monitoring = DB::table('monitoring')->where('id_monitoring', $id_monitoring)->first();
        return view('monitoring.edit_monitoring', compact('data_monitoring'));
    }

    public function editProsess(Request $request, $id_monitoring)
    {
        $request->validate(
            [
                'judul_berita' => 'required',
                'nama_media' => 'required'

            ],
            [
                'judul_berita.required' => 'judul berita tidak boleh kosong!!!',
                'nama_media.required' => 'nama media tidak boleh kosong!!!'
            ]
        );
        if ($request->has('file')) {
            $fileName = time() . '_monitoring_' . $request->file->getClientOriginalName();
            $request->file->move(public_path('upload_monitoring'), $fileName);
        }
        $monitoring = MonitoringModel::find($id_monitoring);
        $monitoring->kategori_media     = $request->kategori_media;
        $monitoring->kategori_berita    = $request->kategori_berita;
        $monitoring->jenis_media        = $request->jenis_media;
        $monitoring->nama_media         = $request->nama_media;
        $monitoring->judul_berita       = $request->judul_berita;
        $monitoring->nama_pengawas      = $request->nama_pengawas;
        $monitoring->penanggungjawab    = $request->penanggungjawab;
        $monitoring->tanggal_penayangan = $request->tanggal_penayangan;
        $monitoring->waktu_monitoring   = $request->waktu_monitoring;
        $monitoring->file               = $fileName;
        $monitoring->link               = $request->link;
        $monitoring->save();

        return redirect()->back();
    }

    public function delete($id_monitoring)
    {
        DB::table('monitoring')->where('id_monitoring', $id_monitoring)->delete();
        return redirect('monitoring/data');
    }

    public function cetakMonitoring($id_monitoring)
    {
        $data_monitoring = DB::table('monitoring')->where('id_monitoring', $id_monitoring)->get();
        return view('monitoring.cetak_monitoring', compact('data_monitoring'));
    }

    public function monitoringexport()
    {
        return Excel::download(new MonitoringExport, 'monitoring.xlsx');
    }
}
