<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Input SDM</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('assets/dashboard')?>/img/brand/kem.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard')?>/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard')?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard')?>/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <?php $this->load->view("_partial/sidenav.php") ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <!-- Header -->
    <?php $this->load->view("_partial/header.php") ?>
    <!-- Header -->
    <div style="height:250px; background-image:url('<?=base_url('assets/img/fotobersama1.jpeg')?>'); ">
      <?php $this->load->view("_partial/headerSDM.php") ?>
      <div class="pl-3" id="formCari">
          <h1 class="text-white ">Input Data SDM</h1>
          
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-xl-8 order-xl-1">
          <?= $this->session->flashdata('message') ?>
          <div class="" id="formInput">
            <div class="">
              <div class="row align-items-center">
                <div class="col-8">
                  <p>Masuukan Data Dengan Benar</p>
                </div>
              </div>
            </div>
            <div class="p-4">
              <div  class='text-danger m--4'>
                <?= validation_errors();?>
              </div>
              <form method="post" action=<?= base_url('InputSDM/tambah_sdm') ?> enctype="multipart/form-data">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="input-nama">Nama</label>
                          <input type="text" id="input-nama" name="nama" class="form-control col-9" placeholder="Masukkan Nama" >
                        </div>  
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="input-nip">NIP</label>
                          <input type="text" id="input-nip" name="nip" class="form-control col-9" placeholder="Masukkan NIP" >
                        </div>
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="input-pendidikan-terakhir">Pendidikan Terakhir</label>
                          <input type="text" id="input-pendidikan-teralhir" name="pendidikan-terakhir" class="form-control col-9" placeholder="Masukkan Pendidikan Terakhir" >
                        </div>
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="pangkat">Pangkat Golongan</label>
                          <input type="text" id="pangkat" name="pangkat" class="form-control col-9" placeholder="Masukkan Pangkat Golongan" >
                        </div>
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="tmt_pangkat">TMT Pangkat</label>
                          <input type="text" id="tmt_pangkat" name="tmt_pangkat" class="form-control col-9" placeholder="Masukkan TMT Pangkat" >
                        </div>
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="ttl">Tempat Tanggal Lahir</label>
                          <input type="text" id="ttl" name="ttl" class="form-control col-9" placeholder="Masukkan Tempat Tanggal Lahir" >
                        </div>
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="alamat">Alamat Rumah</label>
                          <textarea type="area" id="alamat" name="alamat" class="form-control col-9" placeholder="Masukkan Alamat" > </textarea>
                        </div>
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="telepon_kantor">Telepon Kantor</label>
                          <input type="text"  id="telepon_kantor" name="telepon_kantor" class="form-control col-9" placeholder="Masukkan Telepon Kantor" > 
                        </div>
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="telepon">Telepon Kantor</label>
                          <input  type="text" id="telepon" name="telepon" class="form-control col-9" placeholder="Masukkan Telepon" > 
                        </div>
                        <div class="p-4">
                          <label for="jk" class="from-control-label row"> Jenis Kelamin :</label>
                          <label class="form-control-label  pl-5 "><input type="radio" id="jk1" name="jk" value="Laki-laki" class="m-1"   >Laki-laki</label>
                          <label class="form-control-label  pl-5 "><input type="radio" id="jk2" name="jk" value="Perempuan" class="m-1"   >Perempuan</label>
                        </div>
                        <div class="p-4">
                          <label for="jk" class="from-control-label row"> Status :</label>
                          <label class="form-control-label  pl-5 "><input type="radio" id="status1" name="status" value="Menikah" class="m-1"   >Menikah</label>
                          <label class="form-control-label  pl-5 "><input type="radio" id="status2" name="status" value="Belum Menikah" class="m-1"   >Belum Menikah</label>
                        </div>
                        <div class="p-4">
                          <label for="input-lembaga" class="from-control-label row"> Lembaga :</label>
                          <label class="form-control-label  pl-5 row"><input type="checkbox" id="lembaga1" name="lspro" value="1" class="m-1"   >Lembaga Sertivikasi Produk (LSPRO)</label>
                          <label class="form-control-label  pl-5 row"><input type="checkbox" id="lembaga2" name="lit" value="2" class="m-1"   >Lembaga Inspeksi Teknis (LIT)</label>
                          <label class="form-control-label  pl-5 row"><input type="checkbox" id="lembaga3" name="peng" value="3" class="m-1"   >Laboratorium Pengujian</label>
                          <label class="form-control-label  pl-5 row"><input type="checkbox" id="lembaga4" name="kal" value="4" class="m-1"   >Laboratorium Kalibrasi</label>
                        </div>
                        <div class="text-center">
                          <input  class="btn btn-primary my-4" value="Submit" type="submit"></input>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url('assets/dashboard')?>/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/dashboard')?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/dashboard')?>/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url('assets/dashboard')?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url('assets/dashboard')?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url('assets/dashboard')?>/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>