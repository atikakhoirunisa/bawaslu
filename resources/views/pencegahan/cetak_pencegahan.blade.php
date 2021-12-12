<!DOCTYPE html>
<html lang="en">

<title>CETAK LAPORAN PENCEGAHAN</title>
<body>
	<div class="form-group">
		<form action="{{ url('pencegahan/.$data_pencegahan->id_pencegahan') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
			@csrf
       <!--  <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <meta http-equiv="X-UA_Compatible" content="ie-edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
        <center>
        	<img src="{{asset('style/images/logo.png')}}" width="370" height="100" alt="Logo"><br>
        	<p>Sekretariat : Jalan Dr. Radjimin Nomor 16 Suncen, Triharjo, Sleman, Sleman 55514<br>
        	Telepon (0274) 2880477 WA 0811-2632-284, Email : bawaslukabsleman@gmail.com</p>
        	<hr>
        	<strong>LAPORAN HASIL PENCEGAHAN</strong>
        </center>
        <br><br><br>
        <table class="table">
        	@foreach ($data_pencegahan as $id_pencegahan)
        	<tr>
        		<td>Kategori Pencegahan</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->kategori_pencegahan}}</td>
        	</tr>
        	<tr>
        		<td>Nama Pengawas</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->nama_pengawas}}</td>
        	</tr>
        	<tr>
        		<td>Kabupaten</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->kabupaten}}</td>
        	</tr>
        	<tr>
        		<td>Kecamatan</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->kecamatan}}</td>
        	</tr>
        	<tr>
        		<td>Jabatan</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->jabatan}}</td>
        	</tr>
        	<tr>
        		<td>Sasaran Pencegahan</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->sasaran_pencegahan}}</td>
        	</tr>
        	<tr>
        		<td>Hari/Tanggal</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->tanggal_pencegahan}}</td>
        	</tr>
        	<tr>
        		<td>Waktu/Jam</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->waktu_pencegahan}}</td>
        	</tr>
        	<tr>
        		<td>Tempat Kegiatan</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->tempat_pencegahan}}</td>
        	</tr>
        	<tr>
        		<td>Uraian</td>
        		<td>:</td>
        	</tr>
            <tr>
                <td></td>
                <td></td>
                <td colspan="3">{{ $id_pencegahan->uraian_pencegahan}}</td>
            </tr>
        	<tr>
        		<td>Nama File</td>
        		<td>:</td>
        		<td>{{ $id_pencegahan->file_pencegahan}}</td>
        	</tr>
        	@endforeach
        </table>
        <br><br>
        <div>
        	<div style="text-align:center;width:400px;float:right">
        		Sleman, ......................
        		<br/>Pengawas,
        		<p><div style="clear:both;height:50px"></div>({{ $id_pencegahan->nama_pengawas}})</p>
        	</div>
        </div>


    </div>

    <script type="text/javascript">
    	window.print();
    </script>

</body>	
</html>