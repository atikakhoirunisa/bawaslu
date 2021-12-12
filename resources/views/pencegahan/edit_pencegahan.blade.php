@extends('layout.main')

@section('title', 'Pencegahan')

@section('content')
    <div class="content mt-3">
            <div class="animated fadeIn">

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>FORM EDIT HASIL PENCEGAHAN PEMILU</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ url('pencegahan/'.$data_pencegahan->id_pencegahan) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @method('patch')
                        @csrf
                          <div class="row form-group">
                          <div class="col col-md-3"><label for="kategori_pencegahan" class=" form-control-label">Kategori Pencegahan</label></div>
                          <div class="col-12 col-md-9">
                              <select name="kategori_pencegahan" id="kategori_pencegahan" class="form-control" value="{{ $data_pencegahan->kategori_pencegahan }}" autofocus required="kategori_pencegahan">
                              <option value="{{ $data_pencegahan->kategori_pencegahan}}" > {{ $data_pencegahan->kategori_pencegahan }} </option>
                                  <option value="Sosialisasi">Sosialisasi</option>
                                  <option value="Surat atau Dokumen">Surat atau Dokumen</option>
                                  <option value="Langsung">Langsung di Lokasi Pengawasan</option>
                                  <option value="Informal">Informat (melalui WhatsApp/ media lainnya)</option>
                                  <option value="Media Sosial">Media Sosial</option>
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="nama_pengawas" class=" form-control-label">Nama/Tim Pengawas</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama_pengawas" name="nama_pengawas" class="form-control" value="{{ $data_pencegahan->nama_pengawas }}" required="nama_pengawas"><small class="form-text text-muted">Masukkan nama/tim pengawas</small></div>
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
                                <option value="{{ $data_pencegahan->kecamatan}}" > {{ $data_pencegahan->kecamatan }} </option>
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
                                <select name="jabatan" id="jabatan" class="form-control" required="jabatan" >
                                <option value="{{ $data_pencegahan->jabatan}}" > {{ $data_pencegahan->jabatan }} </option>
                                    <option value="Ketua Bawaslu Kabupaten/Kota">Ketua Bawaslu Kabupaten/Kota</option>
                                    <option value="Anggota Bawaslu Kabupaten/Kota">Anggota Bawaslu Kabupaten/Kota</option>
                                    <option value="Sekretariat Bawaslu Kabupaten/Kota">Sekretariat Bawaslu Kabupaten/Kota</option>
                                    <option value="Panitia Pengawasan Pemilihan Kecamatan">Panitia Pengawasan Pemilihan Kecamatan</option>
                                    <option value="Sekretariat Bawaslu Kecamatan">Sekretariat Bawaslu Kecamatan</option>
                                    <option value="Panitia Pengawasan Pemilihan Desa">Panitia Pengawasan Pemilihan Desa</option>
                                    <option value="Pengawas TPS">Pengawas TPS</option>
                                </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="sasaran_pencegahan" class=" form-control-label">Sasaran Pencegahan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="sasaran_pencegahan" name="sasaran_pencegahan" class="form-control" value="{{ $data_pencegahan->sasaran_pencegahan }}" required="sasaran_pencegahan"><small class="form-text text-muted">Masukkan sasaran pencegahan</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tanggal_pencegahan" class=" form-control-label">Hari/Tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tanggal_pencegahan"name="tanggal_pencegahan" class="form-control" value="{{ $data_pencegahan->tanggal_pencegahan }}" required="tanggal_pencegahan">
                              <small class="form-text text-muted">Masukkan tanggal pencegahan (bb-hh-tt)</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="waktu_pencegahan" class=" form-control-label">Waktu/Jam</label></div>
                            <div class="col-12 col-md-9">
                              <input type="time" id="waktu_pencegahan" name="waktu_pencegahan" class="form-control" value="{{ $data_pencegahan->waktu_pencegahan }}" required="waktu_pencegahan"><small class="form-text text-muted">Masukkan waktu</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tempat_pencegahan" class=" form-control-label">Tempat/Lokasi</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="tempat_pencegahan" name="tempat_pencegahan" class="form-control" value="{{ $data_pencegahan->tempat_pencegahan }}" required="tempat_pencegahan"><small class="form-text text-muted">Masukkan tempat/lokasi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="uraian_pencegahan" class=" form-control-label">Uraian Pencegahan</label></div>
                            <div class="col-12 col-md-12"><textarea name="uraian_pencegahan" id="uraian_pencegahan" rows="9" placeholder="Uraian" class="form-control" value="{{ $data_pencegahan->uraian_pencegahan }}"required="uraian_pencegahan" name="{{ $data_pencegahan->uraian_pencegahan}}" > {{ $data_pencegahan->uraian_pencegahan }}</textarea>
                          </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="nama_file" class=" form-control-label">Nama file</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama_file" name="nama_file" class="form-control" value="{{ $data_pencegahan->nama_file }}" required="nama_file"><small class="form-text text-muted">Masukkan nama file</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file_pencegahan" class=" form-control-label">Upload File/Video</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file_pencegahan" name="file_pencegahan" class="form-control-file" required="file_pencegahan" name="file_pencegahan" value="{{ $data_pencegahan->file_pencegahan}}" > {{ $data_pencegahan->file_pencegahan}}></div>
                          </div>
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
