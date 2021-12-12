@extends('layout.main')

@section('title', 'Pencegahan')

@section('content')
    <div class="content mt-3">
            <div class="animated fadeIn">

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>FORM HASIL PENCEGAHAN PEMILU</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ url('pencegahan/store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                          <div class="row form-group">
                          <div class="col col-md-3"><label for="kategori_pencegahan" class=" form-control-label">Kategori Pencegahan</label></div>
                          <div class="col-12 col-md-9">
                              <select name="kategori_pencegahan" id="kategori_pencegahan" class="form-control" required="kategori_pencegahan">
                                  <option value="" disabled selected>Pilihan</option>
                                  <option value="Sosialisasi">Sosialisasi</option>
                                  <option value="Surat atau Dokumen">Surat atau Dokumen</option>
                                  <option value="Langsung di Lokasi Pengawasan">Langsung di Lokasi Pengawasan</option>
                                  <option value="Informat (melalui WhatsApp/ media lainnya)">Informat (melalui WhatsApp/ media lainnya)</option>
                                  <option value="Media Sosial">Media Sosial</option>
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="nama_pengawas" class=" form-control-label">Nama/Tim Pengawas</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama_pengawas" name="nama_pengawas" class="form-control" required="nama_pengawas"><small class="form-text text-muted">Masukkan nama/tim pengawas</small></div>
                          </div>

                          <div class="row form-group">
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
                                      <option value="" disabled selected>Pilihan</option>
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
                            <div class="col col-md-3"><label for="jabatan" class=" form-control-label">Jabatan</label></div>
                            <div class="col-12 col-md-9">
                                <select name="jabatan" id="jabatan" class="form-control" required="jabatan">
                                    <option value="" disabled selected>Pilihan</option>
                                    <option value="ketua_kota">Ketua Bawaslu Kabupaten/Kota</option>
                                    <option value="anggota_kota">Anggota Bawaslu Kabupaten/Kota</option>
                                    <option value="sekretariat_kota">Sekretariat Bawaslu Kabupaten/Kota</option>
                                    <option value="panwaslu_kec">Panitia Pengawasan Pemilihan Kecamatan</option>
                                    <option value="sekretariat_kec">Sekretariat Bawaslu Kecamatan</option>
                                    <option value="panwaslu_desa">Panitia Pengawasan Pemilihan Desa</option>
                                    <option value="pengawas_tps">Pengawas TPS</option>
                                </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="sasaran_pencegahan" class=" form-control-label">Sasaran Pencegahan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="sasaran_pencegahan" name="sasaran_pencegahan" class="form-control" required="sasaran_pencegahan"><small class="form-text text-muted">Masukkan sasaran pencegahan</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tanggal_pencegahan" class=" form-control-label">Hari/Tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tanggal_pencegahan"name="tanggal_pencegahan" class="form-control" required="tempat_pencegahan"><small class="form-text text-muted">Masukkan tanggal pencegahan (bb-hh-tt)</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="waktu_pencegahan" class=" form-control-label">Waktu/Jam</label></div>
                            <div class="col-12 col-md-9"><input type="time" id="waktu_pencegahan" name="waktu_pencegahan" class="form-control" required="waktu_pencegahan"><small class="form-text text-muted">Masukkan waktu</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tempat_pencegahan" class=" form-control-label">Tempat/Lokasi</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="tempat_pencegahan" name="tempat_pencegahan" class="form-control" required="tempat_pencegahan"><small class="form-text text-muted">Masukkan tempat/lokasi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="uraian_pencegahan" class=" form-control-label">Uraian Pencegahan</label></div>
                            <div class="col-12 col-md-12"><textarea name="uraian_pencegahan" id="uraian_pencegahan" rows="9" placeholder="Uraian" class="form-control" required="uraian_pencegahan"></textarea></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="nama_file" class=" form-control-label">Nama file</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama_file" name="nama_file" class="form-control" required="nama_file"><small class="form-text text-muted">Masukkan nama file</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file_pencegahan" class=" form-control-label"></label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file_pencegahan" name="file_pencegahan" class="form-control-file" required="file_pencegahan" multiple><small class="form-text text-muted">Upload file pencegahan</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file_pendukung" class=" form-control-label"></label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file_pendukung" name="file_pendukung" class="form-control-file" required="file_pendukung"><small class="form-text text-muted">Upload file pendukung</small></div>
                          </div>
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
            </div>
        </div>
@endsection


