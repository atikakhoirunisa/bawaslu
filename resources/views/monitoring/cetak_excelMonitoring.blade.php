<table>
	<thead>
		<tr>
			<th>NO.</th>
			<th>KATEGORI MEDIA</th>
			<th>NAMA PENGAWAS</th>
			<th>KATEGORI BERITA</th>
			<th>JENIS MEDIA</th>
			<th>JUDUL BERITA</th>
			<th>TANGGAL PENAYANGAN</th>
		</tr>
	</thead>
	<tbody>
		@foreach($monitoring as $item)
		<tr>
			<td>{{ $loop->iteration}}</td>
			<td>{{ $item->kategori_media}}</td>
            <td>{{ $item->nama_pengawas}}</td>
            <td>{{ $item->kategori_berita}}</td>
            <td>{{ $item->jenis_media}}</td>
            <td>{{ $item->judul_berita}}</td>
            <td>{{ $item->tanggal_penayangan}}</td>
		</tr>
		@endforeach
	</tbody>
</table>