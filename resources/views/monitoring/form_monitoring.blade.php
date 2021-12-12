@extends('layout.main')

@section('title', 'Monitoring Media')

@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">

    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>FORM MONITORING MEDIA PEMILU</strong>
        </div>
        <div class="card-body card-block">
          <form action="{{ url('monitoring/store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="row form-group">
              <div class="col col-md-3"><label for="kategori_media" class=" form-control-label">Kategori Media</label></div>
              <div class="col-12 col-md-9">
                <select name="kategori_media" id="kategori_media" class="form-control" required="kategori_media">
                  <option value="" disabled selected>Pilihan</option>
                  <option value="Internal">Internal</option>
                  <option value="Ekternal">Eksternal</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="kategori_berita" class=" form-control-label">Kategori Berita</label></div>
              <div class="col-12 col-md-9">
                <select name="kategori_berita" id="kategori_berita" class="form-control" required="kategori_berita">
                  <option value="" disabled selected>Pilihan</option>
                  <option value="Rilis Bawaslu">Rilis Bawaslu</option>
                  <option value="Pengawasan">Pengawasan</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="jenis_media" class=" form-control-label">Jenis Media</label></div>
              <div class="col-12 col-md-9">
                <select name="jenis_media" id="jenis_media" class="form-control" required="jenis_media">
                  <option value="" disabled selected>Pilihan</option>
                  <option value="Cetak">Cetak</option>
                  <option value="Online">Online</option>
                  <option value="Radio">Radio</option>
                  <option value="TV">TV</option>
                  <option value="Video">Video</option>
                  <option value="Liputan">Liputan</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="nama_media" class=" form-control-label">Nama Media</label></div>
              <div class="col-12 col-md-9"><input type="text" id="nama_media" name="nama_media" class="form-control" required="nama_media"><small class="form-text text-muted">Masukkan nama  media</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="judul_berita" class=" form-control-label">Judul Berita</label></div>
              <div class="col-12 col-md-9"><input type="text" id="judul_berita" name="judul_berita" class="form-control" required="judul_berita"><small class="form-text text-muted">Masukkan judul berita</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="nama_pengawas" class=" form-control-label">Nama Pengawas</label></div>
              <div class="col-12 col-md-9"><input type="text" id="nama_pengawas" name="nama_pengawas" class="form-control" required="nama_pengawas"><small class="form-text text-muted">Masukkan nama pengawas</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="penanggungjawab" class=" form-control-label">Nama Penanggung jawab</label></div>
              <div class="col-12 col-md-9"><input type="text" id="penanggungjawab" name="penanggungjawab" class="form-control" required="penanggungjawab"><small class="form-text text-muted">Masukkan nama penanggung jawab</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="tanggal_penayangan" class=" form-control-label">Hari/Tanggal Penayangan</label></div>
              <div class="col-12 col-md-9"><input type="date" id="tanggal_penayangan" name="tanggal_penayangan" class="form-control" required="tanggal_penayangan"><small class="form-text text-muted">Masukkan tanggal penayangan (bb-hh-tt)</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="waktu_monitoring" class=" form-control-label">Waktu/Jam</label></div>
              <div class="col-12 col-md-9"><input type="time" id="waktu_monitoring" name="waktu_monitoring" class="form-control" required="waktu_monitoring"><small class="form-text text-muted">Masukkan waktu</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3">
                <label for="file" class=" form-control-label">Upload File</label>
              </div>
              <div class="col-12 col-md-9">
                <input type="file" id="file" name="file" class="form-control-file" required="file" multiple>
                <small class="form-text text-muted">Upload file monitoring media</small>
              </div>
            </div>

              <div class="row form-group">
                <div class="col col-md-3"><label for="link" class=" form-control-label">Link File/Video</label></div>
                <div class="col-12 col-md-9"><input type="text" id="link" name="link" class="form-control" required="link"><small class="form-text text-muted">Masukkan link</small></div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Submit
                </button>

                <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button>

              </form>
            </div>
          </div>
        </div>

      </div>

    </div><!-- .animated -->
  </div>

  @endsection
