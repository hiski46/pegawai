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

<body >
  <!-- Sidenav -->
  <?php $this->load->view("_partial/sidenav.php") ?>
   
    <!-- Header -->
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
   <?php $this->load->view("_partial/header.php") ?>
    <!-- menu -->
    <?php $this->load->view("_partial/headerSDM.php") ?>
    <div class="pl-3 row" id="formCari">
        <h2 class="col-9">Rekapitulasi SDM</h2>
        <a href="<?=base_url('Rekap/Excel');?>" class="col-2 mr-5"><button class="btn btn-outline-success shadow"><i class="fa fa-file-excel"></i><br>Excel</button></a>
    </div>
    <div class='row m-4'>
    </div>
    <?= $this->session->flashdata('message') ?>
    <div class="pt-3 pl-5 ">
        <table class="table bg-white">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pendidikan Terakhir</th>
                    <th scope="col">Pelatihan</th>
                    <th scope="col">Tahun Pelatihan</th>
                    <th scope="col">Lembaga</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($semua as $s):
                ?>
                <tr>
                    <th scope="row"><?=++$page?></th>
                    <td><?= $s->nip;?></td>
                    <td><?= $s->nama;?></td>
                    <td><?= $s->pendidikan_terakhir;?></td>
                    <td><?php 
                        foreach($this->CI->portofolio($s->nip)->result() as $p){?>
                        <ul><li class="mb--3 ml--4" ><?=$p->nama_pelatihan;?></li></ul>
                        <?php }?>
                    </td>
                    <td><?php 
                        foreach($this->CI->portofolio($s->nip)->result() as $p){?>
                        <ul><li class="mb--3 ml--4" ><?=$p->tahun_pelatihan;?></li></ul>
                        <?php }?>
                    </td>
                    <td class='pb-3 pt-2'>
                        <?php foreach($this->CI->cekLembaga($s->nip) as $l){?>
                            <ul><li class="mb--3 ml--4" ><?=$l?></li></ul>   
                        <?php } ?>     
                    </td>               
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
        </table>

        <?= $this->pagination->create_links();?>
        <!-- Modal -->
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