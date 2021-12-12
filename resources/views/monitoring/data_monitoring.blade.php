@extends('layout.main')

@section('title', 'Data Monitoring Media')

@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">

    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>Data Laporan Monitoring Media BAWASLU</strong>
        </div>
        <div class="pull-right">
          <div class="card-body card-block">
            <div class="card-header">
              <a href="{{ route('exportmonitoring') }}" target="_blank" class="btn btn-success">Export</a>
            </div>
            <div class="animated fadeIn">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Action</th>
                    <th>Kategori Media</th>
                    <th>Nama Pengawas</th>
                    <th>Kategori Berita</th>
                    <th>Jenis Media</th>
                    <th>Judul Berita</th>
                    <th>Tanggal Penayangan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_monitoring as $item)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>
                      <a href="{{ url('monitoring/edit/'.$item->id_monitoring) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <form action="{{ url('monitoring/'.$item->id_monitoring) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </button>
                      </form>
                      <a href="{{ url('monitoring/cetak_monitoring/'.$item->id_monitoring) }}" target="_blank" class="btn btn-primary btn-sm">
                        <i class="fa fa-print"></i>
                      </a>
                    </td>
                    <td>{{ $item->kategori_media}}</td>
                    <td>{{ $item->nama_pengawas}}</td>
                    <td>{{ $item->kategori_berita}}</td>
                    <td>{{ $item->jenis_media}}</td>
                    <td>{{ $item->judul_berita}}</td>
                    <td>{{ $item->tanggal_penayangan}}</td>
                  </tr>
                  @endforeach
                </tbody>  
              </thead>
            </table>
          </div>
        </div>
     </div>
   </div>
   @endsection



