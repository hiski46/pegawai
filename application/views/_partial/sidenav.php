<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="<?= base_url() ?>dashboard">
        <h1>Dashboard</h1>
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>dashboard">
                <i class="ni ni-circle-08 text-primary"></i>
                <span class="nav-link-text">Data SDM</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#lembaga" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="lembaga"?>
              <i class="ni ni-collection text-primary"></i>
              <span class="nav-link-text">Lembaga</span>
            </a>
            <div class="row ">
              <div class="col">
                <div class="collapse" id="lembaga">
                  <div class="card card-body mt--1 collapse-inner rounded py-2">
                    <ul class="list-group" id="list-tab" role="tablist">
                    <a class="text-sm" href="<?=base_url()?>"><li class="list-group-item list-group-item-action">Lembaga Sertifikasi Produk</li></a>
                    <a class="text-sm"href="<?=base_url()?>"><li class="list-group-item list-group-item-action">Lembaga Inspeksi Teknis</li></a>
                    <a class="text-sm"href="<?=base_url()?>"><li class="list-group-item list-group-item-action">Laboratorium Pengujian</li></a>
                    <a class="text-sm"href="<?=base_url()?>"><li class="list-group-item list-group-item-action">Laboratorium Kalibrasi</li></a>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
          
      </div>
    </div>
  </div>
</nav>