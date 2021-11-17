<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Login</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('assets/dashboard/img/brand/kem.png') ?>" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?=base_url('assets/dashboard/vendor/nucleo/css/nucleo.css') ?>" type="text/css">
  <link rel="stylesheet" href="<?=base_url('assets/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?=base_url('assets/dashboard') ?>/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  
  <!-- Main content -->
  <div class="main-content ">
    <!-- Header -->
    <div class="header bg-gradient-primary py-5 py-lg-5 pt-lg-5 p-3">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 id="selamatdatang" class="text-white">Selamat Datang!</h1>
              <p class="text-lead text-white">Silahkan masukkan password dan username </p>
            </div>
            
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
      
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <?= $this->session->flashdata('message') ?>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="post" action="<?= base_url("login/aksi_login") ?>">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="username" type="text" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group row">
                      <label class="" for="cars">Pilih Database:</label>
                      <select class="ml-4 col" name="db" id="db">
                        <?php 
                        foreach ($this->CI->cekDb() as $db)
                        { ?>
                            <?php if (strpos($db, 'balai_riset') !== false) { ?>
                              <option value="<?=$db;?>"><?=str_replace("balai_riset_","",$db);?></option>
                            <?php } ?>
                        <?php }?>
                      </select>
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary my-4" value="Login"></input>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            <!-- &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> -->
            <img class="" src="<?= base_url("assets/img/BRSBL2.png")?>" alt="" style="max-width:30%; height:auto; display: block;">
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <!-- <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a> -->
            </li>
            <li class="nav-item">
              <!-- <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a> -->
            </li>
            <li class="nav-item">
              <!-- <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a> -->
            </li>
            <li class="nav-item">
              <!-- <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a> -->
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?=base_url('assets/dashboard') ?>/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url('assets/dashboard') ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('assets/dashboard') ?>/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?=base_url('assets/dashboard') ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?=base_url('assets/dashboard') ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?=base_url('assets/dashboard') ?>/js/argon.js?v=1.2.0"></script>
</body>

</html>