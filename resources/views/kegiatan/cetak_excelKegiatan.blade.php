<table>
	<thead>
		<tr>
			<th>NO.</th>
			<th>KATEGORI</th>
			<th>SASARAN KEGIATAN</th>
			<th>TANGGAL</th>
		</tr>
	</thead>
	<tbody>
		@foreach($kegiatan as $item)
		<tr>
			<td>{{ $loop->iteration}}</td>
			<td>{{ $item->kategori_kegiatan}}</td>
            <td>{{ $item->sasaran_kegiatan}}</td>
            <td>{{ $item->tanggal_kegiatan}}</td>
		</tr>
		@endforeach
	</tbody>
</table>