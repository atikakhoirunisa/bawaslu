@extends('layout.main')

@section('title', 'Kegiatan')

@section('content')
    <div class="content mt-3">
            <div class="animated fadeIn">

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>FORM EDIT KEGIATAN BAWASLU</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ url('kegiatan/'.$data_kegiatan->id_kegiatan) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @method('patch')
                        @csrf
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="kategori_kegiatan" class=" form-control-label">Kategori Kegiatan</label></div>
                            <div class="col-12 col-md-9">
                                <select name="kategori_kegiatan" id="kategori_kegiatan" class="form-control" required="kategori_kegiatan">
                                <option value="{{ $data_kegiatan->kategori_kegiatan}}" > {{ $data_kegiatan->kategori_kegiatan }} </option>
                                    <option value="Rapat Pleno">Rapat Pleno</option>
                                    <option value="Rapat Biasa">Rapat Biasa</option>
                                    <option value="Peningkatan Kapasitan">Peningkatan Kapasitas</option>
                                    <option value="Super Visi">Super Visi</option>
                                    <option value="Konsultasi">Konsultasi</option>
                                    <option value="Lainnya">lainnya</option>
                                </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="nama_penanggung" class=" form-control-label">Nama Penanggung Jawab</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama_penanggung" name="nama_penanggung" class="form-control" value="{{ $data_kegiatan->nama_penanggung }}" required="nama_penanggung"><small class="form-text text-muted">Masukkan nama penanggung jawab kegiatan</small></div>

                            <div class="col col-md-3"><label for="" class=" form-control-label"><strong>Tingkatan Pengawasan</strong></label></div>
                            <div class="col-12 col-md-9"></div>
                            
                            <div class="col col-md-3"><label for="kabupaten" class=" form-control-label">Kabupaten</label></div>
                            <div class="col-12 col-md-9">
                             <!--  <input type="text" name="kabupaten" disabled value="Sleman" id="kabupaten" > -->
                              <select name="kabupaten" id="kabupaten" class="form-control" required="kabupaten">
                                    <option value="sleman">Sleman</option>
                                </select>
                              </div>
                          </div>

                            <div class="row form-group">
                            <div class="col col-md-3"><label for="kecamatan" class=" form-control-label">Kecamatan</label></div>
                              <div class="col-12 col-md-9">
                                <select name="kecamatan" id="kecamatan" class="form-control" required="kecamatan">
                                  <option value="{{ $data_kegiatan->kecamatan}}" > {{ $data_kegiatan->kecamatan }} </option>
                                      <option value="Moyudan">Moyudan</option>
                                      <option value="Godean">Godean</option>
                                      <option value="Minggir">Minggir</option>
                                      <option value="Gamping">Gamping</option>
                                      <option value="Seyegan">Seyegan</option>
                                      <option value="Sleman">Sleman</option>
                                      <option value="Ngaglik">Ngaglik</option>
                                      <option value="Mlati">Mlati</option>
                                      <option value="Tempel">Tempel</option>
                                      <option value="Turi">Turi</option>
                                      <option value="Prambanan">Prambanan</option>
                                      <option value="Kalasan">Kalasan</option>
                                      <option value="Berbah">Berbah</option>
                                      <option value="Ngemplak">Ngemplak</option>
                                      <option value="Pakem">Pakem</option>
                                      <option value="Depok">Depok</option>
                                      <option value="Cangkringan">Cangkringan</option>
                                  </select>
                                </div>
                            </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="notulis" class=" form-control-label">Notulis</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="notulis" name="notulis" class="form-control" value="{{ $data_kegiatan->notulis }}" required="notulis"><small class="form-text text-muted">Masukkan nama notulis kegiatan</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="sasaran_kegiatan" class=" form-control-label">Sasaran Kegiatan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="sasaran_kegiatan" name="sasaran_kegiatan" class="form-control" value="{{ $data_kegiatan->sasaran_kegiatan }}" required="sasaran_kegiatan"><small class="form-text text-muted">Masukkan sasaran kegiatan</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tanggal_kegiatan" class=" form-control-label">Hari/Tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" class="form-control" value="{{ $data_kegiatan->tanggal_kegiatan }}" required="tanggal_kegiatan"><small class="form-text text-muted">Masukkan tanggal kegiatan (bb-hh-tt)</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="waktu_kegiatan" class=" form-control-label">Waktu/Jam</label></div>
                            <div class="col-12 col-md-9"><input type="time" id="waktu_kegiatan" name="waktu_kegiatan" class="form-control" value="{{ $data_kegiatan->waktu_kegiatan }}" required="waktu_kegiatan"><small class="form-text text-muted">Masukkan waktu mulai kegiatan</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="lokasi_kegiatan" class=" form-control-label">Lokasi Kegiatan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="lokasi_kegiatan" name="lokasi_kegiatan" class="form-control" value="{{ $data_kegiatan->lokasi_kegiatan }}" required="lokasi_kegiatan"><small class="form-text text-muted">Masukkan lokasi kegiatan</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="uraian_kegiatan" class=" form-control-label">Uraian</label></div>
                            <div class="col-12 col-md-12"><textarea name="uraian_kegiatan" id="uraian_pencegahan" rows="9" placeholder="Uraian" class="form-control" value="{{ $data_kegiatan->uraian_kegiatan }}"required="uraian_kegiatan" name="{{ $data_kegiatan->uraian_kegiatan}}" > {{ $data_kegiatan->uraian_kegiatan }} </textarea></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file" class=" form-control-label">Upload File</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file" name="file" class="form-control-file" value="{{ $data_kegiatan->file }}" required="file" name="{{ $data_kegiatan->file}}" > {{ $data_kegiatan->file}} <small class="form-text text-muted">Masukkan daftar hadir</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file1" class=" form-control-label">Upload File</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file1" name="file1" class="form-control-file" value="{{ $data_kegiatan->file1 }}" name="{{ $data_kegiatan->file1}}" > {{ $data_kegiatan->file1}} <small class="form-text text-muted">Masukkan dokumentasi</small></div>
                          </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Save
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        
                        </form>

                      </div>
                      </div>
                    </div>

                </div>
            </div>
        </div>
@endsection


