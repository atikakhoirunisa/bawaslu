<table>
	<thead>
		<tr>
			<th>NO.</th>
			<th>NAMA PENGAWAS</th>
			<th>KECAMATAN</th>
			<th>PIHAK YANG DIAWASI</th>
			<th>TAHAPAN</th>
			<th>TANGGAL PENGAWASAN</th>
			<th>DUGAAN PELANGGARAN</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pengawasan as $item)
		<tr>
			<td>{{ $loop->iteration}}</td>
			<td>{{ $item->nama_pengawas}}</td>
            <td>{{ $item->kecamatan}}</td>
            <td>{{ $item->pihak}}</td>
            <td>{{ $item->tahap_pengawasan}}</td>
            <td>{{ $item->tanggal_pengawasan }}</td>
            <td>{{ $item->dugaan_pelanggaran}}</td>
		</tr>
		@endforeach
	</tbody>
</table>