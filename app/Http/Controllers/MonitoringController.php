<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Monitoring;
use App\MonitoringModel;
use App\Exports\MonitoringExport;
use App\Http\Controllers\Controller;

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
        $kategori_media     = $request->input('kategori_media');
        $kategori_berita    = $request->input('kategori_berita');
        $jenis_media        = $request->input('jenis_media');
        $nama_media         = $request->input('nama_media');
        $judul_berita       = $request->input('judul_berita');
        $nama_pengawas      = $request->input('nama_pengawas');
        $penanggungjawab    = $request->input('penanggungjawab');
        $tanggal_penayangan = $request->input('tanggal_penayangan');
        $waktu_monitoring   = $request->input('waktu_monitoring');
        $file               = $request->file('file')->store('file');
        $link               = $request->input('link');

        $fileName = time() . '_monitoring.' . $request->file->extension();
        $request->file->move(public_path('upload_monitoring'), $fileName);

        $data_monitoring = array('kategori_media'=>$kategori_media, 'kategori_berita'=>$kategori_berita, 'jenis_media'=>$jenis_media, 'nama_media'=>$nama_media, 'judul_berita'=>$judul_berita, 'nama_pengawas'=>$nama_pengawas, 'penanggungjawab'=>$penanggungjawab, 'tanggal_penayangan'=>$tanggal_penayangan, 'waktu_monitoring'=>$waktu_monitoring, 'file'=>$fileName, 'link'=>$link);
        DB::table('monitoring')->insert($data_monitoring);

        return redirect('monitoring/data');

    }

    public function edit($id_monitoring)
    {
        $data_monitoring = DB::table('monitoring')->where('id_monitoring', $id_monitoring)->first();
        return view('monitoring.edit_monitoring',compact('data_monitoring'));
    }

    public function editProsess(Request $request, $id_monitoring)
    {
        DB::table('monitoring')->where('id_monitoring', $id_monitoring)->update([
                'kategori_media'     => $request->input('kategori_media'),
                'kategori_berita'    => $request->input('kategori_berita'),
                'jenis_media'        => $request->input('jenis_media'),
                'nama_media'         => $request->input('nama_media'),
                'judul_berita'       => $request->input('judul_berita'),
                'nama_pengawas'      => $request->input('nama_pengawas'),
                'penanggungjawab'    => $request->input('penanggungjawab'),
                'tanggal_penayangan' => $request->input('tanggal_penayangan'),
                'waktu_monitoring'   => $request->input('waktu_monitoring'),
                'file'               => $request->file->store('file'), 
                'link'               => $request->input('link')
            ]);

        return redirect('monitoring/data');
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

    public function monitoringexport(){
        return Excel::download(new MonitoringExport,'monitoring.xlsx');
    }
}
