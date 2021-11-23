<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard-Tambah</title>
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
    <!-- Header -->
    
    <?php $this->load->view("_partial/header.php") ?>
    <!-- Header -->
    
    <div class=" row pl-5 pt-3">
        <h1>Jabatan <?=str_replace('%20',' ',$nama);?></h1>
    </div>
    <div class=" row pl-5 pb-5">
        <h2>Pada <?=$lem?></h2>
    </div>
    <div  class='text-danger m--4'>
      <?= validation_errors();?>
    </div>
    <?= $this->session->flashdata('message') ?>
    <div>
        
        <div class="row  pl-8">
            <h4 class="col-3">NIP</h4>
            <p class="col-4 "><strong>: <?=$nip?> </strong></p>
        </div>
        <div class="row bg-white pl-8">
            <h4 class="col-3">Nama</h4>
            <p class="col-4 "><strong>: <?=str_replace('%20',' ',$nama)?> </strong></p>
        </div>
        <div class="row pl-8">
            <h4 class="col-3">Jabatan</h4>
            <div class="col-6">
                <ul>
                <?php foreach($this->CI->tampil_jabatan($nip,$idlem) as $jabatan){?>
                    <div class="row">
                     <li class="ml--2 col-9"><?=$jabatan->jabatan?> (<?=$jabatan->tmt?>)  </li><a href="<?=base_url('Lembaga/TambahJabatan/hapusJabatan/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6).'/'.$jabatan->id)?>" class=" col-1 ml-4 text-danger">Hapus</a>
                    </div>
                                  
                <?php } ?>
                </ul>
            </div>
            <a  data-toggle="modal" data-target="#tambah_jabatan" href="#" class=" ml-4 col-1">Tambah</a>           
        </div>
        
        <div class="row pl-8">
            <h4 class="col-3">Riwayat Jabatan </h4>
            <div class="col-6">
                <ul>
                <?php foreach($this->CI->tampil_riwayat_jabatan($nip,$idlem) as $rj){?>
                    <div class="row">
                     <li class="ml--2 col-9"><?=$rj->tahun.' - '.$rj->jabatan?> <a href="" data-toggle="modal" data-target="#modal_edit_r_jabatan<?=$rj->id?>" class="text-success">Edit</a>|<a href="<?=base_url('Lembaga/TambahJabatan/hapusRiwayatJabatan/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6).'/'.$rj->id)?>" class="text-danger">Hapus</a>  </li>
                    </div>
                    <div class="modal fade" id="modal_edit_r_jabatan<?=$rj->id?>" tabindex="-1" role="dialog" >
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Edit Riwayat Jabatan</h5>
                            <button class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?= base_url('Lembaga/TambahJabatan/EditJabatan/'.$idlem)?>" method="POST">
                              <div class=row>
                                  <label class="mr-2 col-3" for="nip">Riwayat Jabatan </label>
                                  <input class="p-2" type="text" name="r_jabatan" value="<?=$rj->jabatan?>">
                                  <input class="p-2" type="hidden" name="nip" value="<?=$rj->nip?>">
                                  <input class="p-2" type="hidden" name="nama" value="<?=$nama?>">
                                  
                                </div>
                                <div class="row mt-2">
                                  <label class="mr-2 col-3" for="tahun">Tahun </label>
                                  <input class="p-2 " type="text" name="r_tahun" value="<?=$rj->tahun?>">
                                  <input class="p-2 " type="hidden" name="id" value="<?=$rj->id?>">

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <input type="submit" class="btn btn-primary" value="Ubah">
                                </div>
                            </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>                 
                <?php } ?>
                </ul>
            </div>
            <a  data-toggle="modal" data-target="#tambah_riwayat_jabatan" href="#" class=" ml-4 col-1">Tambah</a>           
        </div>
        <div class="row pl-8">
            <h4 class="col-3">Pengalaman </h4>
            <div class="col-6">
                <ul>
                <?php foreach($this->CI->tampil_pengalaman($nip,$idlem) as $p){?>
                    <div class="row">
                     <li class="ml--2 col-9"><?=$p->tahun.' - '.$p->pengalaman?> <a href="" data-toggle="modal" data-target="#modal_edit_pengalaman<?=$p->id?>" class="text-success">Edit</a>|<a href="<?=base_url('Lembaga/TambahJabatan/hapusPengalaman/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6).'/'.$p->id)?>" class="text-danger">Hapus</a> </li>
                    </div>
                    <div class="modal fade" id="modal_edit_pengalaman<?=$p->id?>" tabindex="-1" role="dialog" >
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Edit Pengalaman</h5>
                            <button class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?= base_url('Lembaga/TambahJabatan/EditPengalaman/'.$idlem)?>" method="POST">
                              <div class=row>
                                  <label class="mr-2 col-3" for="nip">Pengalaman </label>
                                  <input class="p-2" type="text" name="pengalaman" value="<?=$p->pengalaman?>">
                                  <input class="p-2" type="hidden" name="nip" value="<?=$p->nip?>">
                                  <input class="p-2" type="hidden" name="nama" value="<?=$nama?>">
                                  
                                </div>
                                <div class="row mt-2">
                                  <label class="mr-2 col-3" for="tahun">Tahun </label>
                                  <input class="p-2 " type="text" name="r_tahun" value="<?=$p->tahun?>">
                                  <input class="p-2 " type="hidden" name="id" value="<?=$p->id?>">

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <input type="submit" class="btn btn-primary" value="Ubah">
                                </div>
                            </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>                  
                <?php } ?>
                </ul>
            </div>
            <a  data-toggle="modal" data-target="#tambah_pengalaman" href="#" class=" ml-4 col-1">Tambah</a>           
        </div>
        <div class="row pl-8">
            <h4 class="col-3">Rincian Tugas </h4>
            <div class="col-6">
                <ul>
                <?php foreach($this->CI->tampil_tugas($nip,$idlem) as $t){?>
                    <div class="row">
                     <li class="ml--2 col-9"><?=$t->tugas." (".$t->jabatan.")"?> <a href="" data-toggle="modal" data-target="#modal_edit_tugas<?=$t->id?>" class="text-success">Edit</a>|<a href="<?=base_url('Lembaga/TambahJabatan/hapusTugas/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6).'/'.$t->id)?>" class="text-danger">Hapus</a> </li>
                    </div>
                    <div class="modal fade" id="modal_edit_tugas<?=$t->id?>" tabindex="-1" role="dialog" >
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Edit Tugas</h5>
                            <button class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?= base_url('Lembaga/TambahJabatan/EditTugas/'.$idlem)?>" method="POST">
                              <div class=row>
                                  <label class="mr-2 col-3" for="nip">Tugas </label>
                                  <!-- <input class="p-2" type="text" name="tugas" value=""> -->
                                  <textarea name="tugas" id="" cols="30" rows="10" style="white-space: pre-wrap;"><?=$t->tugas?></textarea>
                                  <input class="p-2" type="hidden" name="nip" value="<?=$t->nip?>">
                                  <input class="p-2" type="hidden" name="nama" value="<?=$nama?>">
                                  
                                </div>
                                <div class="row mt-2">
                                  <input class="p-2 " type="hidden" name="id" value="<?=$t->id?>">
                                  <label class="mr-2 col-3" for="jabatan">Jabatan </label>
                                  <input class="p-2" type="text" name="jabatan" value="<?=$t->jabatan?>">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <input type="submit" class="btn btn-primary" value="Ubah">
                                </div>
                            </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>                  
                <?php } ?>
                </ul>
            </div>
            <a  data-toggle="modal" data-target="#tambah_tugas" href="#" class=" ml-4 col-1">Tambah</a>           
        </div>
        <!-- <div class="row bg-white pl-8">
            <h4 class="col-3">Ruang Lingkup</h4>
            <div class="col-4">
                <ul>
                <?php foreach($this->CI->tampilruang($idlem,$nip) as $ruang){?>
                    <div class="row">
                     <li class="ml--2 col-9"><?=$ruang->ruang_lingkup?>  </li><a href="<?=base_url('Lembaga/TambahJabatan/hapusRuang/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6).'/'.$ruang->id)?>" class=" col-1 ml-4 text-danger">Hapus</a>
                    </div>
                    
                                  
                <?php } ?>
                </ul>
            </div>
            <a  data-toggle="modal" data-target="#tambah_ruang" href="#" class=" ml-4 col-1">Tambah</a>           
        </div> -->
        <!-- <div class="row  pl-8">
            <h4 class="col-3">Kelompok Produk</h4>
            <div class="col-4">
                <ul>
                <?php foreach($this->CI->tampilKelompok($idlem,$nip) as $kel){?>
                    <div class="row">
                     <li class="ml--2 col-9"><?=$kel->kel_produk?>  </li><a href="<?=base_url('Lembaga/TambahJabatan/hapusKelompok/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6).'/'.$kel->id)?>" class=" col-1 ml-4 text-danger">Hapus</a>
                    </div>
                    
                                  
                <?php } ?>
                </ul>
            </div>
            <a  data-toggle="modal" data-target="#tambah_kelompok" href="#" class=" ml-4 col-1">Tambah</a>           
        </div> -->
        <!-- <div class="row bg-white pl-8">
            <h4 class="col-3">Sub kelompok Produk</h4>
            <div class="col-4">
                <ul>
                <?php foreach($this->CI->tampilSub($idlem,$nip) as $kel){?>
                    <div class="row">
                     <li class="ml--2 col-9"><?=$kel->sub_kel_produk?>  </li><a href="<?=base_url('Lembaga/TambahJabatan/hapusSub/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6).'/'.$kel->id)?>" class=" col-1 ml-4 text-danger">Hapus</a>
                    </div>
                    
                                  
                <?php } ?>
                </ul>
            </div>
            <a  data-toggle="modal" data-target="#tambah_sub" href="#" class=" ml-4 col-1">Tambah</a>           
        </div> -->
       
            
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="tambah_jabatan" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Jabatan</h5>
            <button class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="mb--3">Pilih Jabatan <strong class="ml-1"><?=$nama?> </p>
            <form action="<?= base_url('Lembaga/TambahJabatan/tambah/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6))?>" method="POST">
                <?php foreach ($this->CI->jabatan_all() as $j) {?>
                  <div class="form-control-label text-xs  pl-5 row"><input type="radio" id="jabatan" name="jabatan" value="<?= $j->jabatan?>" class="m-1"   ><?= $j->jabatan?> </div>
                <?php }?>
                <div class="row mt-3 mb-3">
                  <label class=" ml-3 col-1" for="tmt">TMT</label>
                  <input class="form-control col-4" type="text" name="tmt_jabatan" placeholder="TMT Jabatan">
                </div>
                <button type="submit" class="btn btn-primary"> Tambah </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Riwayat Jabatan -->
    <div class="modal fade bd-example-modal-lg" id="tambah_riwayat_jabatan" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Riwayat Jabatan</h5>
            <button class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
            <p class="">Masukkan Riwayat Jabatan <strong class="ml-1"> </p>
            <form action="<?= base_url('Lembaga/TambahJabatan/tambah_riwayat_jabatan/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6))?>" method="POST">
                <div class = "row mb-4">
                  <label class="col-3" for="riwayat_jabatan">Riwayat Jabatan</label>
                  <input class ="col-8" type="text" name="riwayat_jabatan" placeholder="Masukkan Riwayat Jabatan"> 
                </div>
                <div class = "row mb-4">
                  <label class="col-3" for="tahun_jabatan">Tahun</label>
                  <input class ="" type="text" name="tahun_jabatan" placeholder="Masukkan Tahun Jabatan"> 
                </div>
                <button type="submit" class="btn btn-primary"> Tambah </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="tambah_pengalaman" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Pengalanman</h5>
            <button class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
            <p class="">Masukkan Pengalaman <strong class="ml-1"> </p>
            <form action="<?= base_url('Lembaga/TambahJabatan/tambah_pengalaman/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6))?>" method="POST">
                <div class = "row mb-4">
                  <label class="col-3" for="pengalaman">Pengalaman</label>
                  <input class ="col-8" type="text" name="pengalaman" placeholder="Masukkan pengalaman"> 
                </div>
                <div class = "row mb-4">
                  <label class="col-3" for="tahun">Tahun</label>
                  <input class ="" type="text" name="tahun" placeholder="Masukkan Tahun"> 
                </div>
                <button type="submit" class="btn btn-primary"> Tambah </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="tambah_tugas" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Tugas</h5>
            <button class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
            <p class="">Masukkan Tugas <strong class="ml-1"> </p>
            <form action="<?= base_url('Lembaga/TambahJabatan/tambah_tugas/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6))?>" method="POST">
                <div class = "row mb-4">
                  <label class="col-3" for="tugas">Tugas</label>
                  <textarea name="tugas" id="tugas" cols="30" rows="10" style="white-space: pre-wrap;" placeholder="masukkan tugas"></textarea> 
                </div>
                <div class = "row mb-4">
                  <label class="col-3" for="tugas">Jabatan</label>
                  <input class ="col-5" type="text" name="jabatan" placeholder="Masukkan Jabatan"> 
                </div>
                <button type="submit" class="btn btn-primary"> Tambah </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="tambah_ruang" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Ruang Lingkup</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p class="mb--3">Masukkan Ruang Lingkup <strong class="ml-1"><?=$nama?> </p>
                      <form action="<?= base_url('Lembaga/TambahJabatan/tambahRuangLingkup/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6))?>" method="POST">
                      <div class="form-group mb-3">
                          <div class="input-group input-group-alternative input-group-merge">
                              <input class="form-control" name="ruang" placeholder="Masukkan Ruang Lingkup Disini" type="text">
                          </div>
                      </div>
                          
                          <button type="submit" class="btn btn-primary"> Tambah </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <div class="modal fade bd-example-modal-lg" id="tambah_kelompok" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Kelompok Produk</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p class="mb--3">Masukkan Kelompok Produk  <strong class="ml-1"><?=$nama?> </p>
                      <form action="<?= base_url('Lembaga/TambahJabatan/tambahKelompok/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6))?>" method="POST">
                      <div class="form-group mb-3">
                          <div class="input-group input-group-alternative input-group-merge">
                              <input class="form-control" name="kelompok" placeholder="Masukkan Kelompok Produk Disini" type="text">
                          </div>
                      </div>
                          
                          <button type="submit" class="btn btn-primary"> Tambah </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <div class="modal fade bd-example-modal-lg" id="tambah_sub" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Sub Kelompok Produk</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p class="mb--3">Masukkan Sub Kelompok Produk  <strong class="ml-1"><?=$nama?> </p>
                      <form action="<?= base_url('Lembaga/TambahJabatan/tambahSub/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6))?>" method="POST">
                      <div class="form-group mb-3">
                          <div class="input-group input-group-alternative input-group-merge">
                              <input class="form-control" name="sub" placeholder="Masukkan Sub Kelompok Produk Disini" type="text">
                          </div>
                      </div>
                          
                          <button type="submit" class="btn btn-primary"> Tambah </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- Akhir Modal -->
   
    
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