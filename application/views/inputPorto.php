<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard-Tambah</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('assets/dashboard')?>/img/brand/favicon.png" type="image/png">
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
    <!-- Page content -->
    <div class="container-fluid mt-0">
      <div class="row">
        <div class="col-xl-8 order-xl-1">
          <?= $this->session->flashdata('message') ?>
          <div class="" id="formInput">
            <div class="">
              <div class="row align-items-center">
                <div class="col-8">
                  <h1 class="pt-3">Input Portofolio</h1>
                  <h4>Masukkan Pelatihan yang pernah diikuti</h4>
                </div>
              </div>
            </div>
            <div class="p-4">
              <form method="post" action=<?= base_url('InputSDM/tambah_sdm') ?> enctype="multipart/form-data">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="input-pelatihan">Pelatihan yang Pernah Diikuti</label>
                          <input type="text" id="input-pelatihan" name="pelatihan" class="form-control col-9" placeholder="Masukkan Pelatihan yang Pernah Diikuti" >
                        </div>  
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="input-tahun">Tahun</label>
                          <input type="text" id="input-tahun" name="tahun" class="form-control col-9" placeholder="Masukkan Tahun Pelatihan" >
                        </div>
                        <div class="row p-2">
                          <label class="form-control-label col-3" for="input-penyelenggara">Penyelenggara</label>
                          <input type="text" id="input-penyelenggara" name="penyelenggara" class="form-control col-9" placeholder="Masukkan Penyelenggara Pelatihan" >
                        </div>
                        <div class=" row p-2">
                          <label class="col-3" for="sertifikat">Upload Sertifikat (Format Pdf): </label> <input class="ml-0  btn btn-secondary col-9" name="sertifikat" type="file">
                        </div>
                        <div class=" row p-2">
                          <label class="col-3" for="sertifikat">Upload Evaluasi (Format Pdf): </label> <input class="ml-0 btn btn-secondary col-9" name="evaluasi" type="file">
                        </div>
                        <div class=" row d-flex justify-content-around text-center">
                          <input  class="btn btn-primary my-4 col-2" value="Submit" data-toggle="modal" data-target="#input-portofolio" type="button"></input>
                          <a  href="dashboard"> <button type="button" class="btn btn-success my-4">Lanjut</button></a>
                        </div>
                        <!-- Modal Portofolio -->
                        <div class="modal fade" id="input-portofolio" tabindex="-1" role="dialog" aria-labelledby="input-portofolioLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="input-portofolioLabel">Data SDM sudah disimpan, isi form dibawah jika SDM memiliki Portofolio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body"><h1>Ini Modal (isi form)</h1></div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> close</button>
                                <button type="button" class="btn btn-primary" > Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end Modal Portofolio -->
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