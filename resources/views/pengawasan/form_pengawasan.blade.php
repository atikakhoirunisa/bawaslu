@extends('layout.main')

@section('title', 'Pengawasan')

@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">

    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>FORM HASIL PENGAWASAN PEMILU</strong>
        </div>
        <div class="card-body card-block">

          <form action="{{ url('pengawasan/store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>I. DATA PENGAWAS</strong></label></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="nama_pengawas" class=" form-control-label">Nama/Tim Pengawas</label></div>
              <div class="col-12 col-md-9"><input type="text" id="nama_pengawas" name="nama_pengawas" class="form-control" required><small class="form-text text-muted">Masukkan nama/tim pengawas</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="jabatan_pengawas" class=" form-control-label">Jabatan</label></div>
              <div class="col-12 col-md-9">
                <select name="jabatan_pengawas" id="jabatan_pengawas" class="form-control" required>
                  <option value="" disabled selected>Pilihan</option>
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
              <div class="col col-md-3"><label for="poin_surat" class=" form-control-label">Poin Surat Tugas</label></div>
              <div class="col-12 col-md-9"><input type="text" id="poin_surat" name="poin_surat" class="form-control" required><small class="form-text text-muted">Masukkan poin surat tugas</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="alamat_pengawas" class=" form-control-label">Alamat/Domisili</label></div>
              <div class="col-12 col-md-9"><input type="text" id="alamat_pengawas" name="alamat_pengawas" class="form-control" required><small class="form-text text-muted">Masukkan alamat kantor</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="kabupaten" class=" form-control-label">Kabupaten</label></div>
              <div class="col-12 col-md-9">
                <select name="kabupaten" id="kabupaten" class="form-control" required>
                  <option value="Sleman">Sleman</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="kecamatan" class=" form-control-label">Kecamatan</label></div>
              <div class="col-12 col-md-9">
                <select name="kecamatan" id="kecamatan" class="form-control" required>
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
              <div class="col col-md-10"><label class=" form-control-label"><strong>II. KEGIATAN PENGAWASAN</strong></label></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="tahap_pengawasan" class=" form-control-label">Tahapan yang diawasi</label></div>
              <div class="col-12 col-md-9">
                <select name="tahap_pengawasan" id="tahap_pengawasan" class="form-control" required>
                  <option value="" disabled selected>Pilihan</option>
                  <option value="Rekrutmen Penyelenggara Adhoc">Rekrutmen Penyelenggara Adhoc</option>
                  <option value="Pemutakhiran data dan Penyusunan Daftar Pemilih">Pemutakhiran data dan Penyusunan Daftar Pemilih</option>
                  <option value="Pendaftaran dan Verifikasi Peserta Pemilu">Pendaftaran dan Verifikasi Peserta Pemilu</option>
                  <option value="Penetapan Peserta Pemilu">Penetapan Peserta Pemilu</option>
                  <option value="Penetapan Dapil">Penetapan Dapil</option>
                  <option value="Pencalonan Anggota Pres-Wapres DPR, DPD, DPRD Prov/Kab/Kota">Pencalonan Anggota Pres-Wapres DPR, DPD, DPRD Prov/Kab/Kota</option>
                  <option value="Kampanye">Kampanye</option>
                  <option value="Logistik">Logistik</option>
                  <option value="Pungut Hitung">Pungut Hitung</option>
                  <option value="Rekapitulasi Perolehan Suara">Rekapitulasi Perolehan Suara</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label class=" form-control-label">Bentuk Pengawasan</label></div>
              <div class="col col-md-9">
                <div class="form-check">
                  <div class="radio">
                    <label for="radio1" class="form-check-label">
                      <input type="radio" id="bentuk" name="bentuk" value="Langsung" class="form-check-input">Langsung
                    </label>
                  </div>
                  <div class="radio">
                    <label for="radio2" class="form-check-label ">
                      <input type="radio" id="bentuk" name="bentuk" value="Tidak Langsung" class="form-check-input">Tidak Langsung
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="pihak" class=" form-control-label">Pihak yang diawasi</label></div>
              <div class="col-12 col-md-9">
                <select name="pihak" id="pihak" class="form-control" required>
                  <option value="" disabled selected>Pilihan</option>
                  <option value="KPU">KPU</option>
                  <option value="KPU Provinsi">KPU Provinsi</option>
                  <option value="KPU Kabupaten/Kota">KPU Kabupaten/Kota</option>
                  <option value="PPK">PPK</option>
                  <option value="PPS">PPS</option>
                  <option value="PPDP">PPDP</option>
                  <option value="KPPS">KPPS</option>
                  <option value="Pasangan Calon">Pasangan Calon</option>
                  <option value="Tim Sukses">Tim Sukses</option>
                  <option value="Tim Kampanye">Tim Kampanye</option>
                  <option value="Pelaksana Kampanye">Pelaksana Kampanye</option>
                  <option value="Pengurus Partai Politik">Pengurus Partai Politik</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="tanggal_pengawasan" class=" form-control-label">Hari/Tanggal</label></div>
              <div class="col-12 col-md-9"><input type="date" id="tanggal_pengawasan" name="tanggal_pengawasan" class="form-control" required><small class="form-text text-muted">Masukkan tanggal (hh-bb-tt)</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="waktu_mulai" class=" form-control-label">Waktu/Jam Mulai</label></div>
              <div class="col-12 col-md-9"><input type="time" id="waktu_mulai" name="waktu_mulai" class="form-control" required><small class="form-text text-muted">Masukkan waktu mulai pengawasan</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="waktu_selesai" class=" form-control-label">Waktu/Jam Selesai</label></div>
              <div class="col-12 col-md-9"><input type="time" id="waktu_selesai" name="waktu_selesai" class="form-control" required><small class="form-text text-muted">Masukkan waktu selesai pengawasan</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="tempat_pengawasan" class=" form-control-label">Tempat/Lokasi Pengawasan</label></div>
              <div class="col-12 col-md-9"><input type="text" id="tempat_pengawasan" name="tempat_pengawasan" class="form-control" required><small class="form-text text-muted">Masukkan tempat/lokasi pengawasan</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>III. URAIAN HASIL PENGAWASAN</strong></label></div>
              <div class="col-12 col-md-12"><textarea name="uraian_pengawasan" id="uraian_pengawasan" rows="9" placeholder="Uraian" class="form-control" required></textarea></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="file_pengawasan" class=" form-control-label">Dokumentasi Pengawasan</label></div>
              <div class="col-12 col-md-9"><input type="file" id="file_pengawasan" name="file_pengawasan" multiple class="form-control-file" required></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label class=" form-control-label"><strong>IV. DUGAAN PELANGGARAN</strong></label></div>
              <div class="col col-md-9">
                <div class="form-check">
                  <div class="radio">
                    <label for="radio1" class="form-check-label ">
                      <input type="radio" id="dugaan_pelanggaran" name="dugaan_pelanggaran" value="Ada" class="form-check-input">Ada
                    </label>
                  </div>
                  <div class="radio">
                    <label for="radio2" class="form-check-label ">
                      <input type="radio" id="dugaan_pelanggaran" name="dugaan_pelanggaran" value="Tidak Ada" class="form-check-input">Tidak Ada
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="kategori" class=" form-control-label">Kategori</label></div>
              <div class="col-12 col-md-9">
                <select name="kategori" id="kategori" class="form-control" required>
                  <option value="" disabled selected>Pilihan</option>
                  <option value="Adminitrasi">Adminitrasi</option>
                  <option value="Kode Etik">Kode Etik</option>
                  <option value="Pidana">Pidana</option>
                  <option value="Sengketa">Sengketa</option>
                  <option value="UU lainnya">UU lainnya</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>V. INFORMASI DUGAAN PELANGGARAN</strong></label></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="tempat_pelanggaran" class=" form-control-label">Tempat Kejadian</label></div>
              <div class="col-12 col-md-9"><input type="text" id="tempat_pelanggaran" name="tempat_pelanggaran" class="form-control" required><small class="form-text text-muted">Masukkan tempat kejadian pelanggaran</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="waktu_pelanggaran" class=" form-control-label">Waktu Kejadian</label></div>
              <div class="col-12 col-md-9"><input type="time" id="waktu_pelanggaran" name="waktu_pelanggaran" class="form-control" required><small class="form-text text-muted">Masukkan waktu kejadian pelanggaran</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="nama_pelanggaran" class=" form-control-label">Nama Pelaku</label></div>
              <div class="col-12 col-md-9"><input type="text" id="nama_pelanggaran" name="nama_pelanggaran" class="form-control" required><small class="form-text text-muted">Masukkan nama pelaku</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="status_pelaku" class=" form-control-label">Status Pelaku</label></div>
              <div class="col-12 col-md-9"><input type="text" id="status_pelaku" name="status_pelaku" class="form-control" required><small class="form-text text-muted">Masukkan status pelaku</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>VI. URAIAN DUGAAN PELANGGARAN</strong></label></div>
              <div class="col-12 col-md-12"><textarea name="uraian_pelanggaran" id="uraian_pelanggaran" rows="9" placeholder="Uraian" class="form-control" required></textarea></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>VII. SAKSI-SAKSI</strong></label></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="saksi1" class=" form-control-label">Saksi I</label></div>
              <div class="col-12 col-md-9"><input type="text" id="saksi1" name="saksi1" class="form-control" required><small class="form-text text-muted">Masukkan nama saksi I</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="saksi2" class=" form-control-label">Saksi II</label></div>
              <div class="col-12 col-md-9"><input type="text" id="saksi2" name="saksi2" class="form-control" required><small class="form-text text-muted">Masukkan nama saksi II</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>VII. BUKTI PENDUKUNG</strong></label></div>
              <div class="col-12 col-md-12"><input type="file" id="bukti_pelanggaran" name="bukti_pelanggaran" multiple class="form-control-file" required></div>
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

