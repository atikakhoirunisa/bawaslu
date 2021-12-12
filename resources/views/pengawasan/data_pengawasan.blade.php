@extends('layout.main')

@section('title', 'Data Pengawasan')

@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">

    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>Data Laporan Pengawasan BAWASLU</strong>
        </div>
        <div class="pull-right">
          <div class="card-body card-block">
            <div class="card-header">
              <a href="{{ route('exportpengawasan') }}" target="_blank" class="btn btn-success">Export</a>
            </div>
            <div class="animated fadeIn">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Action</th>
                    <th>Nama Pengawas</th>
                    <th>Kecamatan</th>
                    <th>Pihak yang diawasi</th>
                    <th>Tahapan</th>
                    <th>Tanggal Pengawasan</th>
                    <th>Dugaan Pelanggaran</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_pengawasan as $item)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>
                      <a href="{{ url('pengawasan/edit/'.$item->id_pengawasan) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <form action="{{ url('pengawasan/'.$item->id_pengawasan) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </button>
                      </form>
                      <a href="{{ url('pengawasan/cetak_pengawasan/'.$item->id_pengawasan) }}" target="_blank" class="btn btn-primary btn-sm">
                        <i class="fa fa-print"></i>
                      </a>
                    </td>
                    <td>{{ $item->nama_pengawas}}</td>
                    <td>{{ $item->kecamatan}}</td>
                    <td>{{ $item->pihak}}</td>
                    <td>{{ $item->tahap_pengawasan}}</td>
                    <td>{{ $item->tanggal_pengawasan }}</td>
                    <td>{{ $item->dugaan_pelanggaran}}</td>
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


