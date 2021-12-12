<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>REGISTER - BAWASLU SLEMAN</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')}}">
  <link href="{{ asset('style/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-dark">

  <div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="login-content">
        <div class="login-logo">
                    <!-- <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                      </a> -->
                    </div>
                    <div class="login-form">
                      <form action="{{ route('register.post') }}" method="post">
                        @csrf
                        <h3 class="text-center">REGISTER</h3>

                        <div class="form-group">
                          <label for="inputEmail">Nama</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputEmail" name="name" placeholder="Masukkan Nama"value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail">Jabatan</label>
                          <select class="form-control @error('jabatan') is-invalid @enderror" id="inputEmail" name="jabatan">
                            <option value="" disabled selected>Pilihan</option>
                            <option value="Ketua Bawaslu Kabupaten/Kota">Ketua Bawaslu Kabupaten/Kota</option>
                            <option value="Anggota Bawaslu Kabupaten/Kota">Anggota Bawaslu Kabupaten/Kota</option>
                            <option value="Sekretariat Bawaslu Kabupaten/Kota">Sekretariat Bawaslu Kabupaten/Kota</option>
                            <option value="Panitia Pengawasan Pemilihan Kecamatan">Panitia Pengawasan Pemilihan Kecamatan</option>
                            <option value="Sekretariat Bawaslu Kecamatan">Sekretariat Bawaslu Kecamatan</option>
                            <option value="Panitia Pengawasan Pemilihan Desa">Panitia Pengawasan Pemilihan Desa</option>
                            <option value="Pengawas TPS">Pengawas TPS</option>
                          </select>
                          <!-- <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="inputEmail" name="jabatan" placeholder="Masukkan jabatan" value="{{ old('jabatan') }}"> -->
                        </div>

                        <div class="form-group">
                          <label for="inputEmail">Tanggal Lahir</label>
                          <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="inputEmail" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ old('tgl_lahir') }}">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail">No Handphone</label>
                          <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="inputEmail" name="no_hp" placeholder="Masukkan No Handphone" value="{{ old('no_hp') }}">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail">No WhatsApp</label>
                          <input type="text" class="form-control @error('no_wa') is-invalid @enderror" id="inputEmail" name="no_wa" placeholder="Masukkan No WhatsApp" value="{{ old('no_wa') }}">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail">Alamat Kantor</label>
                          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="inputEmail" name="alamat" placeholder=" Masukkan Alamat Kantor" value="{{ old('alamat') }}">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail">Password</label>
                          <input input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" name="password" placeholder="Masukkan Password">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail">Email address</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" placeholder="Masukkan Email"value="{{ old('email') }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        
                        <div class="register-link m-t-15 text-center">
                          <p>Sudah memiliki akun? <a href="{{ route('login') }}"> Login</a></p>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>


              <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
              <script src="assets/js/popper.min.js"></script>
              <script src="assets/js/plugins.js"></script>
              <script src="assets/js/main.js"></script>


            </body>
            </html>
