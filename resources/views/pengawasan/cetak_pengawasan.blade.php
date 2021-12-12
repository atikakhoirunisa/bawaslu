<!DOCTYPE html>
<html>

<title>CETAK DATA LAPORAN PENGAWASAN</title>
<body>
	<div class="form-group">
		<form action="{{ url('monitoring/.$data_monitoring->id_monitoring') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
			@csrf
            <center>
               <img src="{{asset('style/images/logo.png')}}" width="370" height="100" alt="Logo"><br>
               <p>Sekretariat : Jalan Dr. Radjimin Nomor 16 Suncen, Triharjo, Sleman, Sleman 55514<br>
               Telepon (0274) 2880477 WA 0811-2632-284, Email : bawaslukabsleman@gmail.com</p>
               <hr>
               <strong>LAPORAN HASIL PENGAWASAN PEMILU</strong>
           </center>
           <br><br><br>
           <table class="table">
            @foreach ($data_pengawasan as $id_pengawasan)
            <tr>
                <td><b>I. DATA PENGAWAS</b></td>
            </tr>
            <tr>
                <td>Nama/Tim Pengawas</td>
                <td>:</td>
                <td>{{ $id_pengawasan->nama_pengawas}}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>{{ $id_pengawasan->jabatan_pengawas}}</td>
            </tr>
            <tr>
                <td>Poin Surat Tugas</td>
                <td>:</td>
                <td>{{ $id_pengawasan->poin_surat}}</td>
            </tr>
            <tr>
                <td>Alamat Kantor</td>
                <td>:</td>
                <td>{{ $id_pengawasan->alamat_pengawas}}</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>{{ $id_pengawasan->kecamatan}}</td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td>:</td>
                <td>{{ $id_pengawasan->kabupaten}}</td>
            </tr>
            <tr>
                <td><b>II. KEGIATAN PENGAWASAN</b></td>
            </tr>
            <tr>
                <td>Tahapan yang diawasi</td>
                <td>:</td>
                <td>{{ $id_pengawasan->tahap_pengawasan}}</td>
            </tr>
            <tr>
                <td>Bentuk Pengawasan</td>
                <td>:</td>
                <td>{{ $id_pengawasan->bentuk}}</td>
            </tr>
            <tr>
                <td>Pihak yang diawasi</td>
                <td>:</td>
                <td>{{ $id_pengawasan->pihak}}</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $id_pengawasan->tanggal_pengawasan}}</td>
            </tr>
            <tr>
                <td>Waktu/Jam Mulai</td>
                <td>:</td>
                <td>{{ $id_pengawasan->waktu_mulai}}</td>
            </tr>
            <tr>
                <td>Waktu/Jam Selesai</td>
                <td>:</td>
                <td>{{ $id_pengawasan->waktu_selesai}}</td>
            </tr>
            <tr>
                <td>Tempat/Lokasi Pengawasan</td>
                <td>:</td>
                <td>{{ $id_pengawasan->tempat_pengawasan}}</td>
            </tr>
            <tr>
                <td><b>III. URAIAN HASIL PENGAWASAN</b></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td colspan="3">{{ $id_pengawasan->uraian_pengawasan}}</td>
            </tr>
            <tr>
                <td>Dokumentasi Pengawasan</td>
                <td>:</td>
                <td>{{ $id_pengawasan->file_pengawasan}}</td>
            </tr>
            <tr>
                <td><b>IV. DUGAAN PELANGGARAN</b></td>
                <td>:</td>
                <td>{{ $id_pengawasan->dugaan_pelanggaran}}</td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>{{ $id_pengawasan->kategori}}</td>
            </tr>
            <tr>
                <td><b>V. INFORMASI DUGAAN PELANGGARAN</b></td>
            </tr>
            <tr>
                <td>Tempat Kejadian</td>
                <td>:</td>
                <td>{{ $id_pengawasan->tempat_pelanggaran}}</td>
            </tr>
            <tr>
                <td>Waktu Kejadian</td>
                <td>:</td>
                <td>{{ $id_pengawasan->waktu_pelanggaran}}</td>
            </tr>
            <tr>
                <td>Nama Pelaku</td>
                <td>:</td>
                <td>{{ $id_pengawasan->nama_pelanggaran}}</td>
            </tr>
            <tr>
                <td>Status Pelaku</td>
                <td>:</td>
                <td>{{ $id_pengawasan->status_pelaku}}</td>
            </tr>
            <tr>
                <td><b>VI. URAIAN DUGAAN PELANGGARAN</b></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td colspan="3">{{ $id_pengawasan->uraian_pelanggaran}}</td>
            </tr>
            <tr>
                <td><b>VII. SAKSI-SAKSI</b></td>
            </tr>
            <tr>
                <td>Saksi I</td>
                <td>:</td>
                <td>{{ $id_pengawasan->saksi1}}</td>
            </tr>
            <tr>
                <td>Saksi II</td>
                <td>:</td>
                <td>{{ $id_pengawasan->saksi2}}</td>
            </tr>
            <tr>
                <td><b>VIII. BUKTI PENDUKUNG</b></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td colspan="3">{{ $id_pengawasan->bukti_pelanggaran}}</td>
            </tr>

            @endforeach
        </table>
        <br><br>
        <div>
           <div style="text-align:center;width:400px;float:right">
              Sleman, ......................
              <br/>Pengawas,
              <p><div style="clear:both;height:50px"></div>({{ $id_pengawasan->nama_pengawas}})</p>
          </div>
      </div>


  </div>

  <script type="text/javascript">
   window.print();
</script>

</body>	
</html>