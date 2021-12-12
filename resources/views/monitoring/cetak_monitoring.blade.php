<!DOCTYPE html>
<html>

<title>CETAK DATA LAPORAN MONITORING</title>
<body>
	<div class="form-group">
		<form action="{{ url('monitoring/.$data_monitoring->id_monitoring') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
			@csrf
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <meta http-equiv="X-UA_Compatible" content="ie-edge"> -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
        <center>
        	<img src="{{asset('style/images/logo.png')}}" width="370" height="100" alt="Logo"><br>
        	<p>Sekretariat : Jalan Dr. Radjimin Nomor 16 Suncen, Triharjo, Sleman, Sleman 55514<br>
        	Telepon (0274) 2880477 WA 0811-2632-284, Email : bawaslukabsleman@gmail.com</p>
            <hr>
            <strong>LAPORAN HASIL MONITORING MEDIA PEMILU</strong>
        </center>
        <br><br><br>
        <table class="table">
        	@foreach ($data_monitoring as $id_monitoring)
        	<tr>
        		<td>Kategori Media</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->kategori_media}}</td>
        	</tr>
        	<tr>
        		<td>Kategori Berita</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->kategori_berita}}</td>
        	</tr>
        	<tr>
        		<td>Jenis Media</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->jenis_media}}</td>
        	</tr>
        	<tr>
        		<td>Nama Media</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->nama_media}}</td>
        	</tr>
        	<tr>
        		<td>Judul Berita</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->judul_berita}}</td>
        	</tr>
        	<tr>
        		<td>Nama Pengawas</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->nama_pengawas}}</td>
        	</tr>
        	<tr>
        		<td>Nama Penanggungjawab</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->penanggungjawab}}</td>
        	</tr>
        	<tr>
        		<td>Hari/Tanggal Penayangan</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->tanggal_penayangan}}</td>
        	</tr>
        	<tr>
        		<td>Waktu/Jam</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->waktu_monitoring}}</td>
        	</tr>
        	<tr>
        		<td>File</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->file}}</td>
        	</tr>
        	<tr>
        		<td>Link File</td>
        		<td>:</td>
        		<td>{{ $id_monitoring->link}}</td>
        	</tr>
        	@endforeach
        </table>
        <br><br>
        <div>
        	<div style="text-align:center;width:400px;float:right">
        		Sleman, ......................
        		<br/>Pengawas,
        		<p><div style="clear:both;height:50px"></div>({{ $id_monitoring->nama_pengawas}})</p>
        	</div>
        </div>


    </div>

    <script type="text/javascript">
    	window.print();
    </script>

</body>	
</html>