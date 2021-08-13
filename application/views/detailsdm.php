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
    <!-- Header -->
    <?php $this->load->view("_partial/header.php") ?>
    <!-- Header -->
    <div class=" row p-5">
        <h1>Detail Data Nama</h1>
    </div>
    <div>
        <?php foreach ($sdm as $s){ ?>
        <div class="row pl-8">
            <h4 class="col-3">Nama</h4>
            <p class="col-9 "><strong>: <?=$s->nama?></strong></p>
        </div>
        <div class="row pl-8">
            <h4 class="col-3">NIP</h4>
            <p class="col-9 "><strong>: <?=$s->nip?> </strong></p>
        </div>
        <div class="row pl-8">
            <h4 class="col-3">Pendidikan Terakhir</h4>
            <p class="col-9 "><strong>: <?=$s->pendidikan_terakhir?> </strong></p>
        </div>
        <div class="row pl-8">
            <h4 class="col-3">Lembaga</h4>
            <div class="col-6">
                <?php foreach($this->CI->cekLembaga($s->nip) as $l){?>
                    <ul display="" class="">
                        <li display="" class=" mb--3 ml--4" ><?=$l?></li>
                    </ul>   
                    <?php } ?>   
                </div>           
            </div>
        <div class="row mt-3 pl-8 pb-6">
            <h4 class="col-3">Portofolio</h4>
            <div class="col-2">
                <?php foreach($this->CI->portofolio($s->nip)->result() as $p){?>
                    <ul class="ml--4 pl--4">
                        <a href=""><li class=" p-1 mb--2  text-white  bg-translucent-primary" ><?=$p->nama_pelatihan;?></li></a>
                    </ul>
                <?php }?>
            </div>
        </div>
            
        <?php } ?>
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