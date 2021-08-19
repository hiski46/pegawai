<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('assets/dashboard') ?>/img/brand/kem.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/argon.css?v=1.2.0" type="text/css">
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
    <div class="container-fluid mt--6">
      <div class="row">
      
        <div class="col">
          <div class="card">
            <?= $this->session->flashdata('message') ?>
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Daftar Toko yang sudah di tambahkan</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Nama Toko</th>
                    <th scope="col" class="sort" data-sort="budget" width="50px">Alamat</th>
                    <th scope="col" class="sort" data-sort="status">Jenis Pembayaran</th>
                    <th scope="col">Jenis Produk</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <?php foreach ($toko as $t) { ?>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?= $t->nmtoko?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <?= substr($t->alamat, 0, 30); ?>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status"><p><?= substr($t->bayar, 0, 20); ?></p></span>
                      </span>
                    </td>
                    <td>
                      <p><?= $t->jenis?></p>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" data-toggle="modal" data-target="#modal_edit<?= $t->UID ?>" href="#">Edit</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#modal_hapus<?= $t->UID ?>" href="#">Hapus</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- Modal Edit -->
            <?php foreach($toko as $t){ ?>
              <div class="modal fade bd-example-modal-lg" id="modal_edit<?= $t->UID?>" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Data Toko</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body centered center">
                      <form method="post" action=<?= base_url('dashboard/dashboard/edit') ?> enctype="multipart/form-data">
                        <div class="pl-lg-4">
                          <div class="row">
                            <img src="<?= base_url('assets/img/'.$t->pic); ?>" alt="" style="width:20%;height:auto;" srcset="">
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="input-username">Nama Toko</label>
                                <input type="text" id="nama" name="nama" class="form-control" value="<?= $t->nmtoko ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Alamat</label>
                                <input type="text" id="input-first-name" name="alamat" class="form-control" value="<?= $t->alamat ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Jadwal</label>
                                <input type="text" id="input-first-name" name="jadwal" class="form-control" value="<?= $t->jadwal ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Website</label>
                                <input type="text" id="input-first-name" name="website" class="form-control" value="<?= $t->web ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Contact</label>
                                <input type="text" id="input-first-name" name="kontak" class="form-control" value="<?= $t->cp ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Metode Pembayaran</label>
                                <input type="text" id="input-first-name" name="metode" class="form-control" value="<?= $t->bayar ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Jenis Oleh-oleh</label>
                                <input type="text" id="input-first-name" name="jenis" class="form-control" value="<?= $t->jenis ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Latitude</label>
                                <input type="text" id="input-first-name" name="lat" class="form-control" value="<?= $t->lat ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Longitude</label>
                                <input type="text" id="input-first-name" name="long" class="form-control" value="<?= $t->long ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name"> Masukkan Gambar Toko</label>
                                <input type="file" name="gambar" id="gambar" class="btn btn-secondary">
                                <input name="gambar_lama" type="hidden" value="<?= $t->pic ?>">
                                <input name="id" type="hidden" value="<?= $t->UID ?>">
                                <br>
                                <br>
                                <textarea name="deskripsi" id="" cols="30" rows="10" value=""><?= $t->deskripsi ?></textarea>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>
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
            <?php } ?>
            <!-- Akhir modal edit -->
            <!-- Modal Hapus -->
            <?php foreach ($toko as $t) { ?>
              <div class="modal fade" id="modal_hapus<?= $t->UID?>" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Hapus</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Apakah Anda Yakin ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismis="modal">Batal</button>
                      <a href="<?= base_url('dashboard/dashboard/hapus/'.$t->UID.'/'.$t->nmtoko)?>"><button type="button" class="btn btn-primary">Hapus</button></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!-- Akhir Modal Hapus -->

            <!-- Card footer -->
            <!-- <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url('assets/dashboard') ?>/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/dashboard') ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/dashboard') ?>/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url('assets/dashboard') ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url('assets/dashboard') ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?= base_url('assets/dashboard') ?>/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url('assets/dashboard') ?>/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url('assets/dashboard') ?>/js/argon.js?v=1.2.0"></script>
</body>

</html>