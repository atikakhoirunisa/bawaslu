<table>
	<thead>
		<tr>
			<th>NO.</th>
			<th>KATEGORI PENCEGAHAN</th>
			<th>NAMA/TIM PENGAWAS</th>
			<th>SASARAN PENCEGAHAN</th>
			<th>TANGGAL PENCEGAHAN</th>
			<th>KECAMATAN</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pencegahan as $item)
		<tr>
			<td>{{ $loop->iteration}}</td>
			<td>{{ $item->kategori_pencegahan}}</td>
			<td>{{ $item->nama_pengawas}}</td>
			<td>{{ $item->sasaran_pencegahan}}</td>
			<td>{{ $item->tanggal_pencegahan}}</td>
			<td>{{ $item->kecamatan}}</td>
		</tr>
		@endforeach
	</tbody>
</table>