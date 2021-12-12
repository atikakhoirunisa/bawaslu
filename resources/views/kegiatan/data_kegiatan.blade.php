@extends('layout.main')

@section('title', 'Data Kegiatan')

@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">

    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>Data Kegiatan BAWASLU</strong>
        </div>
        <div class="pull-right">
          <div class="card-body card-block">
            <div class="card-header">
              
              <a href="{{ route('exportkegiatan') }}" target="_blank" class="btn btn-success">Export</a>
            </div>
            <div class="animated fadeIn">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Action</th>
                    <th>kategori</th>
                    <th>Sasaran Kegiatan</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_kegiatan as $item)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>
                      <a href="{{ url('kegiatan/edit/'.$item->id_kegiatan) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <form action="{{ url('kegiatan/'.$item->id_kegiatan) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </button>
                      </form>
                      <a href="{{ url('kegiatan/cetak_kegiatan/'.$item->id_kegiatan) }}" target="_blank" class="btn btn-primary btn-sm">
                        <i class="fa fa-print"></i>
                      </a> 
                    </td>
                    <td>{{ $item->kategori_kegiatan}}</td>
                    <td>{{ $item->sasaran_kegiatan}}</td>
                    <td>{{ date('d-m-Y', strtotime($item->tanggal_kegiatan)) }}</td>
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



