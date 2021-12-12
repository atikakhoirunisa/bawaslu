@extends('layout.main')

@section('title', 'Data Pencegahan')

@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">

    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>Data Laporan Pencegahan BAWASLU</strong>
        </div>
        <div class="pull-right">
          <div class="card-body card-block">
            <div class="card-header">
              <a href="{{ route('exportpencegahan') }}" target="_blank" class="btn btn-success">Export</a>
            </div>
            <div class="animated fadeIn">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Action</th>
                    <th>Kategori Pencegahan</th>
                    <th>Nama/Tim Pengawas</th>
                    <th>Sasaran Pencegahan</th>
                    <th>Tanggal Pencegahan</th>
                    <th>Kecamatan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_pencegahan as $item)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>
                      <a href="{{ url('pencegahan/edit/'.$item->id_pencegahan) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <form action="{{ url('pencegahan/'.$item->id_pencegahan) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </button>
                      </form>
                      <a href="{{ url('pencegahan/cetak_pencegahan/'.$item->id_pencegahan) }}" target="_blank" class="btn btn-primary btn-sm">
                        <i class="fa fa-print"></i>
                      </a> 
                    </td>
                    <td>{{ $item->kategori_pencegahan}}</td>
                    <td>{{ $item->nama_pengawas}}</td>
                    <td>{{ $item->sasaran_pencegahan}}</td>
                    <td>{{ $item->tanggal_pencegahan}}</td>
                    <td>{{ $item->kecamatan}}</td>
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


