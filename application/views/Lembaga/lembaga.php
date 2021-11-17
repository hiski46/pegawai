<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Lembaga</title>
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

<body >
  <!-- Sidenav -->
  
  <?php $this->load->view("_partial/sidenav.php") ?>
   
    <!-- Header -->
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
   <?php $this->load->view("_partial/header.php") ?>
    <!-- menu -->
    <div style="height:200px; background-image:url('<?=base_url('assets/img/'.$this->session->flashdata('foto'))?>'); ">
      <div class="pl-3 pt-8" id="formCari">
        <h1 class="text-white"><?=$this->session->flashdata('nama_lembaga')?></h1>
      </div>
    </div>
    
    <!-- <div class='row m-4'>
        <form action="<?= base_url('Caridata/TampilCari');?>" method="POST" class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative input-group-merge">
                    <div class="input-group-prepend">
                        <button type="submit" class="input-group-text"><i class="fas fa-search"></i></button>
                    </div>
                    <input class="form-control" name="cari" placeholder="cari..." type="text">
                </div>
            </div>
        </form>
    </div> -->
    <?= $this->session->flashdata('message') ?>
    <div class="pt-3 pl-5 ">
        <table class="table bg-white">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <!-- <th scope="col">Ruang Lingkup</th>
                    <th scope="col">Kelompok Produk</th>
                    <th scope="col">Sub. Kelompok Produk</th> -->
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $page=0;
                    foreach($lembaga as $l):
                ?>
                <tr>
                    <th scope="row"><?=++$page?></th>
                    <td><?= $l->nip;?></td>
                    <td><?= $l->nama;?></td>
                    <td>
                      <ul>
                        <?php foreach($this->CI->tampil_jabatan($l->nip,$this->uri->segment(4)) as $jb){ 
                          
                          $ganti = str_replace(" ","_",$jb->jabatan);
                        ?>
                          <?php if($jb->jabatan!=""){?>
                            <li class="ml--4"><?=$jb->jabatan?> </li>
                          <?php }?>
                        <?php }?>
                            
                      </ul>
                    </td>
                    <td>
                      <ul>
                      <?php //foreach($this->CI->tampil_ruang($l->nip, $this->uri->segment(4)) as $jb){?>
                        
                          <!-- <li class="ml--4" ><?=$jb->ruang_lingkup?></li> -->
                  
                        <?php //} ?> 
                        </ul>
                    </td>
                    <td>
                      <ul>
                      <?php //foreach($this->CI->tampil_kelompok($l->nip, $this->uri->segment(4)) as $jb){?>
                        
                          <!-- <li class="ml--4" ><?=$jb->kel_produk?></li> -->
                  
                        <?php //} ?> 
                        </ul>
                    </td>
                    <td>
                      <ul>
                      <?php //foreach($this->CI->tampil_sub($l->nip, $this->uri->segment(4)) as $jb){?>
                        
                          <!-- <li class="ml--4" ><?=$jb->sub_kel_produk?></li> -->
                  
                        <?php //} ?> 
                        </ul>
                    </td>
                    <td>
                      <ul>
                          <!-- <?php //foreach(//$this->CI->tampil_jabatan($l->nip) as $jb){?>
                              <?php //if($jb->kel_produk!=""){?>
                                <li class="ml--4 "><?=$jb->kel_produk?></li>
                              <?php //} ?>
                              <?php //if($jb->kel_produk==""){?>
                                <li class="list-unstyled ">-</li>
                              <?php //} ?>
                              <?php// } ?> -->
                            </ul>
                    
                    </td>
                    <td>
                      
                      <ul>
                             <?php foreach($this->CI->tampil_jabatan($l->nip,$this->uri->segment(4)) as $jb){ ?>
                              
                                
                                <!-- Modal -->
                                     
                                            <div class="modal fade bd-example-modal-lg " id="hapus_jabatan<?= $jb->id?>" tabindex="-1" role="dialog" >
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title">Hapus Jabatan</h5>
                                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <p> Apakah anda yakin menghapus jabatan <strong><?=$jb->jabatan?></strong>  Untuk <strong><?=$l->nama?></strong></p>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <a class="btn btn-danger" href="<?=base_url('Lembaga/Lembaga/hapus_jabatan/'.$this->uri->segment(4).'/'.$l->nip.'/'.$ganti);?>">Hapus</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                         
                                  <!-- Akhir Modal -->
                                <?php } ?>
                              </ul>
                         
                    </td>
                    <td>
                      <div class="row">
                        <!-- <a href="//base_url('Lembaga/Lembaga/hapus_jabatan/'.$this->uri->segment(4).'/'.$l->nip.'/'.$ganti)" class=" ml--9 float-right text-danger">-hapus</a> -->
                        <a class="btn btn-success btn-sm text-xs ml-2 mt-2 mr-3" href="<?=base_url("Lembaga/Lembaga/Cetak/".$l->nip."/".$this->uri->segment(4)."/".$l->nama)?>" > Cetak</a>
                        <a class="btn btn-primary btn-sm text-xs ml-2 mt-2 mr-3" href="<?=base_url("Lembaga/TambahJabatan/menu/".$l->nip."/".$this->uri->segment(4)."/".$l->nama)?>" > Tambah</a>
                      </div>
                    </td>               
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
        </table>
        <!-- Modal -->
        <?php foreach ($lembaga as $l) { ?>
              <div class="modal fade bd-example-modal-lg" id="tambah_jabatan<?= $l->nip?>" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Jabatan</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p class="mb--3">Pilih Jabatan <strong class="ml-1"><?=$l->nama?> </p>
                      <form action="<?= base_url('Lembaga/Lembaga/tambah_jabatan/'.$this->uri->segment(4))?>" method="POST">
                          <?php foreach ($list_jabatan as $j) {?>
                            <div class="form-control-label text-xs  pl-5 row"><input type="radio" id="jabatan" name="jabatan[]" value="<?= $j->jabatan?>" class="m-1"   ><?= $j->jabatan?></div>
                          <?php }?>
                          <div class="row p-2">
                            <label class="form-control-label text-sm col-3" for="ruang_lingkup">Ruang Lingkup</label>
                            <input type="text" id="ruang_lingkup" name="ruang_lingkup" class="form-control col-9" placeholder="Masukkan Ruang Lingkup" >
                          </div> 
                          <div class="row p-2">
                            <label class="form-control-label text-sm col-3" for="kel_produk">Kelompok Produk</label>
                            <input type="text" id="kel_produk" name="kel_produk" class="form-control col-9" placeholder="Masukkan Kelompok Produk" >
                          </div>
                          <div class="row p-2">
                            <label class="form-control-label text-sm col-3" for="sub_kel_produk">Sub. Kelompok Produk</label>
                            <input type="text" id="sub_kel_produk" name="sub_kel_produk" class="form-control col-9" placeholder="Masukkan Sub. Kelompok Produk" >
                          </div>
                          <input class="p-2" type="hidden" name="nip" value="<?=$l->nip?>">
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" value="Tambah">
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
        <!-- Akhir Modal -->
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">    
    </footer>
  </div>  
  <!-- Argon Scripts -->
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