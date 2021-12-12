<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

use App\Pengawasan;
use App\PengawasanModel;
use App\Exports\PengawasanExport;
use App\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;



class PengawasanController extends Controller
{
    public function index()
    {
        $data_pengawasan = DB::table('pengawasan')->get();

        //return $data_pengawasan;
        return view('pengawasan.data_pengawasan', ['data_pengawasan' => $data_pengawasan]);
    }

    public function add()
    {
    	return view('pengawasan.form_pengawasan');
    }

    public function store(Request $request)
    {
        $nama_pengawas     = $request->input('nama_pengawas'); 
        $jabatan_pengawas  = $request->input('jabatan_pengawas'); 
        $poin_surat        = $request->input('poin_surat'); 
        $alamat_pengawas   = $request->input('alamat_pengawas'); 
        $kabupaten         = $request->input('kabupaten'); 
        $kecamatan         = $request->input('kecamatan'); 
        $tahap_pengawasan  = $request->input('tahap_pengawasan'); 
        $bentuk            = $request->input('bentuk'); 
        $pihak             = $request->input('pihak'); 
        $tanggal_pengawasan= $request->input('tanggal_pengawasan'); 
        $waktu_mulai       = $request->input('waktu_mulai'); 
        $waktu_selesai     = $request->input('waktu_selesai'); 
        $tempat_pengawasan = $request->input('tempat_pengawasan'); 
        $uraian_pengawasan = $request->input('uraian_pengawasan'); 
        $file_pengawasan   = $request->file('file_pengawasan')->store('file_pengawasan');
        $dugaan_pelanggaran= $request->input('dugaan_pelanggaran');
        $kategori          = $request->input('kategori');  
        $tempat_pelanggaran= $request->input('tempat_pelanggaran'); 
        $waktu_pelanggaran = $request->input('waktu_pelanggaran'); 
        $nama_pelanggaran  = $request->input('nama_pelanggaran'); 
        $status_pelaku     = $request->input('status_pelaku'); 
        $uraian_pelanggaran= $request->input('uraian_pelanggaran'); 
        $saksi1            = $request->input('saksi1'); 
        $saksi2            = $request->input('saksi2'); 
        $bukti_pelanggaran = $request->file('bukti_pelanggaran')->store('bukti_pelanggaran');

        $fileName = time() . '_pengawasan.' . $request->file_pengawasan->extension();
        $request->file_pengawasan->move(public_path('upload_pengawasan'), $fileName);

        $fileName2 = time() . '_pelanggaran.' . $request->bukti_pelanggaran->extension();
        $request->bukti_pelanggaran->move(public_path('upload_pengawasan'), $fileName2);

        $data_pengawasan = array('nama_pengawas'=>$nama_pengawas, 'jabatan_pengawas'=>$jabatan_pengawas, 'poin_surat'=>$poin_surat, 'alamat_pengawas'=>$alamat_pengawas, 'kabupaten'=>$kabupaten, 'kecamatan'=>$kecamatan, 'tahap_pengawasan'=>$tahap_pengawasan, 'bentuk'=>$bentuk, 'pihak'=>$pihak, 'tanggal_pengawasan'=>$tanggal_pengawasan, 'waktu_mulai'=>$waktu_mulai, 'waktu_selesai'=>$waktu_selesai, 'tempat_pengawasan'=>$tempat_pengawasan, 'uraian_pengawasan'=>$uraian_pengawasan, 'file_pengawasan'=>$fileName, 'dugaan_pelanggaran'=>$dugaan_pelanggaran, 'kategori'=>$kategori, 'tempat_pelanggaran'=>$tempat_pelanggaran, 'waktu_pelanggaran'=>$waktu_pelanggaran, 'nama_pelanggaran'=>$nama_pelanggaran, 'status_pelaku'=>$status_pelaku, 'uraian_pelanggaran'=>$uraian_pelanggaran, 'saksi1'=>$saksi1, 'saksi2'=>$saksi2, 'bukti_pelanggaran'=>$fileName2);
        DB::table('pengawasan')->insert($data_pengawasan);

        return redirect('pengawasan/data');
    }

    public function edit($id_pengawasan)
    {
        $data_pengawasan = DB::table('pengawasan')->where('id_pengawasan', $id_pengawasan)->first();
        return view('pengawasan.edit_pengawasan',compact('data_pengawasan'));
    }

    public function editProsess(Request $request, $id_pengawasan)
    {
        DB::table('pengawasan')->where('id_pengawasan', $id_pengawasan)->update([
            'nama_pengawas'     => $request->input('nama_pengawas'), 
            'jabatan_pengawas'  => $request->input('jabatan_pengawas'), 
            'poin_surat'        => $request->input('poin_surat'), 
            'alamat_pengawas'   => $request->input('alamat_pengawas'), 
            'kabupaten'         => $request->input('kabupaten'), 
            'kecamatan'         => $request->input('kecamatan'), 
            'tahap_pengawasan'  => $request->input('tahap_pengawasan'), 
            'bentuk'            => $request->input('bentuk'), 
            'pihak'             => $request->input('pihak'), 
            'tanggal_pengawasan'=> $request->input('tanggal_pengawasan'), 
            'waktu_mulai'       => $request->input('waktu_mulai'), 
            'waktu_selesai'     => $request->input('waktu_selesai'), 
            'tempat_pengawasan' => $request->input('tempat_pengawasan'), 
            'uraian_pengawasan' => $request->input('uraian_pengawasan'), 
            'file_pengawasan'   => $request->file('file_pengawasan')->store('file_pengawasan'), 
            'dugaan_pelanggaran'=> $request->input('dugaan_pelanggaran'),
            'kategori'          => $request->input('kategori'),  
            'tempat_pelanggaran'=> $request->input('tempat_pelanggaran'), 
            'waktu_pelanggaran' => $request->input('waktu_pelanggaran'), 
            'nama_pelanggaran'  => $request->input('nama_pelanggaran'), 
            'status_pelaku'     => $request->input('status_pelaku'), 
            'uraian_pelanggaran'=> $request->input('uraian_pelanggaran'), 
            'saksi1'            => $request->input('saksi1'), 
            'saksi2'            => $request->input('saksi2'), 
            'bukti_pelanggaran' => $request->file('bukti_pelanggaran')->store('bukti_pelanggaran')
        ]);

        return redirect('pengawasan/data');
    }

    public function delete($id_pengawasan)
    {
        \DB::table('pengawasan')->where('id_pengawasan', $id_pengawasan)->delete();
        return redirect('pengawasan/data');
    }

    public function cetakPengawasan($id_pengawasan)
    {
        $data_pengawasan = DB::table('pengawasan')->where('id_pengawasan', $id_pengawasan)->get();
        return view('pengawasan.cetak_pengawasan', compact('data_pengawasan'));
    }

    public function pengawasanexport(){
        return Excel::download(new PengawasanExport,'pengawasan.xlsx');
    }
}
