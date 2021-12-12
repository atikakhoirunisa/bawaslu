<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Kegiatan;
use App\KegiatanModel;
use App\Exports\KegiatanExport;
use App\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;


class KegiatanController extends Controller
{
    public function index()
    {
        $data_kegiatan = DB::table('kegiatan')->get();

        //return $data_monitoring;
        return view('kegiatan.data_kegiatan', ['data_kegiatan' => $data_kegiatan]);
    }

    public function add()
    {
    	return view('kegiatan.form_kegiatan');
    }

    public function store(Request $request)
    {

        $kategori_kegiatan 	= $request->input('kategori_kegiatan');
        $nama_penanggung 	= $request->input('nama_penanggung');
        $kabupaten		 	= $request->input('kabupaten');
        $kecamatan			= $request->input('kecamatan');
        $notulis			= $request->input('notulis');
        $sasaran_kegiatan	= $request->input('sasaran_kegiatan');
        $tanggal_kegiatan	= $request->input('tanggal_kegiatan');
        $waktu_kegiatan		= $request->input('waktu_kegiatan');
        $lokasi_kegiatan	= $request->input('lokasi_kegiatan');
        $uraian_kegiatan	= $request->input('uraian_kegiatan');
        $file		        = $request->file('file')->store('file');
        $file1              = $request->file('file1')->store('file1');

        $fileName = time() . '_daftar_hadir.' . $request->file->extension();
        $request->file->move(public_path('upload_kegiatan'), $fileName);

        $fileName2 = time() . '_dokumentasi.' . $request->file1->extension();
        $request->file1->move(public_path('upload_kegiatan'), $fileName2);

        $data = array('kategori_kegiatan'=>$kategori_kegiatan, 'nama_penanggung'=>$nama_penanggung,'kabupaten'=>$kabupaten, 'kecamatan'=>$kecamatan, 'notulis'=>$notulis, 'sasaran_kegiatan'=>$sasaran_kegiatan, 'tanggal_kegiatan'=>$tanggal_kegiatan, 'waktu_kegiatan'=>$waktu_kegiatan, 'lokasi_kegiatan'=>$lokasi_kegiatan, 'uraian_kegiatan'=>$uraian_kegiatan, 'file'=>$fileName, 'file1'=>$fileName2);
        DB::table('kegiatan')->insert($data);

        return redirect('kegiatan/data');

    }

    public function delete($id_kegiatan)
    {
        DB::table('kegiatan')->where('id_kegiatan', $id_kegiatan)->delete();
        return redirect('kegiatan/data');
    }

    public function edit($id_kegiatan)
    {
        $data_kegiatan = DB::table('kegiatan')->where('id_kegiatan', $id_kegiatan)->first();
        return view('kegiatan.edit_kegiatan',compact('data_kegiatan'));
    }

    public function editProsess(Request $request, $id_kegiatan)
    {
        DB::table('kegiatan')->where('id_kegiatan', $id_kegiatan)
            ->update([
                'kategori_kegiatan'  => $request->input('kategori_kegiatan'),
                'nama_penanggung'    => $request->input('nama_penanggung'),
                'kabupaten'          => $request->input('kabupaten'),
                'kecamatan'          => $request->input('kecamatan'),
                'notulis'            => $request->input('notulis'),
                'sasaran_kegiatan'   => $request->input('sasaran_kegiatan'),
                'tanggal_kegiatan'   => $request->input('tanggal_kegiatan'),
                'waktu_kegiatan'     => $request->input('waktu_kegiatan'),
                'lokasi_kegiatan'    => $request->input('lokasi_kegiatan'),
                'uraian_kegiatan'    => $request->input('uraian_kegiatan'),
                'file'               => $request->file->store('file'),
                'file1'              => $request->file->store('file1')
            ]);
        return redirect('kegiatan/data');
    }

    public function cetakKegiatan($id_kegiatan)
    {
        $data_kegiatan = DB::table('kegiatan')->where('id_kegiatan', $id_kegiatan)->get();
        // $data_kegiatan = DB::table('kegiatan')->get();

        //return $data_monitoring;
        return view('kegiatan.cetak_kegiatan', compact('data_kegiatan'));
    }

    public function kegiatanexport(){
        return Excel::download(new KegiatanExport,'kegiatan.xlsx');
    }
}
