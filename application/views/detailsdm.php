<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Detail SDM</title>
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
    <?php foreach ($sdm as $s){ ?>
    <div class=" row p-5">
        <h1>Detail Data <?=$s->nama;?></h1>
    </div>
    <div  class='text-danger m--4'>
      <?= validation_errors();?>
    </div>
    <?= $this->session->flashdata('message') ?>
    <div>
        
        <div class="row  pl-8">
            <h4 class="col-3">NIP</h4>
            <p class="col-6 "><strong>: <?=$s->nip?> </strong></p>
        </div>
        <div class="row bg-white pl-8">
            <h4 class="col-3">Nama</h4>
            <p class="col-6 "><strong>: <?=$s->nama?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_nama" href="#" class="col-1  ">ubah</a>
        </div>
        
        <div class="row  pl-8">
            <h4 class="col-3">Pangkat Golongan</h4>
            <p class="col-6 "><strong>: <?=$s->pangkat?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_pangkat" href="#" class="col-1  ">ubah</a>
        </div>
        <div class="row bg-white pl-8">
            <h4 class="col-3">TMT Pangkat</h4>
            <p class="col-6 "><strong>: <?=$s->tmt_pangkat?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_tmtpangkat" href="#" class="col-1  ">ubah</a>
        </div>
        <!-- <div class="row  pl-8">
            <h4 class="col-3">Pendidikan Terakhir</h4>
            <p class="col-6 "><strong>: <?=$s->pendidikan_terakhir?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_pendidikan_terakhir" href="#" class="col-1  ">ubah</a>
        </div> -->
        <div class="row pl-8">
            <h4 class="col-3">Riwayat Pendidikan</h4>
            <div class="col-6">

              <?php foreach ($pendidikan as $pd){ ?> 
                <ul>
                  <li class=>
                    <?=$pd->tahun.' - '.$pd->pendidikan?>
                    <a href="#" data-toggle="modal" data-target="#modal_edit_pen<?=$pd->id?>" class="text-success">edit</a>|<a class="text-danger" href="<?=base_url('DetailSdm/Hapus_Pend/'.$s->nip.'/'.$pd->id)?>"> Hapus <a>
                  </li>
                </ul>
                <div class="modal fade" id="modal_edit_pen<?=$pd->id?>" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Riwayat Pendidikan</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/EditData')?>" method="POST">
                        <div class=row>
                            <label class="mr-2 col-3" for="nip">Riwayat Pendidikan </label>
                            <input class="p-2" type="text" name="r_pen" value="<?=$pd->pendidikan?>">
                            <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
                            
                          </div>
                          <div class="row mt-2">
                            <label class="mr-2 col-3" for="tahun">Tahun </label>
                            <input class="p-2 " type="text" name="r_tahun" value="<?=$pd->tahun?>">
                            <input class="p-2 " type="hidden" name="id" value="<?=$pd->id?>">

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
                
              <?php }?>
            </div>
            <a data-toggle="modal" data-target="#modal_pen" href="#" class="col-1">Tambah</a>
            <!-- Modal Pendidikan -->
            
              <div class="modal fade" id="modal_pen" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Riwayat</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahPen')?>" method="POST">
                        <div class=row>
                            <label class="mr-2 col-3" for="nip">Riwayat Pendidikan </label>
                            <input class="p-2 " type="text" name="pen" placeholder="Tambah Pendidikan">
                            <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
                            
                          </div>
                          <div class="row mt-2">
                            <label class="mr-2 col-3" for="tahun">Tahun </label>
                            <input class="p-2" type="text" name="tahun" placeholder="Tahun">

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" value="Tambah">
                          </div>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>
              
        </div>
        <div class="row bg-white pl-8">
            <h4 class="col-3">Tempat Tanggal Lahir</h4>
            <p class="col-6 "><strong>: <?=$s->ttl?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_ttl" href="#" class="col-1  ">ubah</a>
        </div>
        <div class="row  pl-8">
            <h4 class="col-3">Jenis Kelamin</h4>
            <p class="col-6 "><strong>: <?=$s->jenis_kelamin?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_jenis_kelamin" href="#" class="col-1  ">ubah</a>
        </div>
        <div class="row bg-white pl-8">
            <h4 class="col-3">Status</h4>
            <p class="col-6 "><strong>: <?=$s->status?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_status" href="#" class="col-1  ">ubah</a>
        </div>
        <div class="row  pl-8">
            <h4 class="col-3">Alamat</h4>
            <p class="col-6 "><strong>: <?=$s->alamat?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_alamat" href="#" class="col-1  ">ubah</a>
        </div>
        <div class="row bg-white pl-8">
            <h4 class="col-3">Telepon Kantor</h4>
            <p class="col-6 "><strong>: <?=$s->telepon_kantor?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_telepon_kantor" href="#" class="col-1  ">ubah</a>
        </div>
        <div class="row  pl-8">
            <h4 class="col-3">Telepon Rumah</h4>
            <p class="col-6 "><strong>: <?=$s->telepon_rumah?></strong> </p> 
            <a data-toggle="modal" data-target="#modal_telepon_rumah" href="#" class="col-1  ">ubah</a>
        </div>
  
        

        <div class="row bg-white pl-8">
            <h4 class="col-3">Lembaga</h4>
            <div class="col-6">
              <?php
              $id=0;
              $id_lem=$this->CI->cekLembagaId($s->nip);
               foreach($this->CI->cekLembaga($s->nip) as $l)
               {?>
                    <ul display="" class="">
                        <li display="" class=" mb--3 ml--4" ><?=$l?>
                            <ul>
                                <?php for ($i=0; $i <= $id ; $i++) { 
                                  $y=$id_lem[$i];
                                }?> 
                                <?php foreach($this->CI->tampil_jabatan_2($s->nip,$y) as $jabatan){?>
                                  <?php if($jabatan->jabatan!=""){?>
                                    <li class="ml--4"><?=$jabatan->jabatan?> </li>
                                  <?php }?>
                                  <?php if($jabatan->jabatan==""){?>
                                    <li class="list-unstyled ml--4">Jabatan:</li>
                                  <?php }?>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>   
                <?php $id++; } ?>   
              </div>
            <a data-toggle="modal" data-target="#modal_lembaga" href="#" class="col-1">ubah</a>           
        </div>
        <div class="row mt-3 pl-8 pb-6">
            <h4 class="col-3">Portofolio</h4>
            <div class="col-2">
                <?php foreach($this->CI->portofolio($s->nip)->result() as $p){?>
                    <ul class="ml--4 pl--4">
                        <a class="" data-toggle="modal" data-target="#modal_porto<?=$p->id_portofolio?>" href="#"><li class=" mb--3  " ><?=$p->nama_pelatihan;?></li></a>
                    </ul>
                <?php }?>
            </div>
            <a href="<?=base_url('inputPorto')?>" class="col-1">+Tambah</a> 
        </div>
            
        <?php } ?>
    </div>
    <!-- Modal -->
    <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_nama" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Nama</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahNama')?>" method="POST">
                          <label class="mr-2" for="nama">Nama</label>
                          <input class="p-2" type="text" name="nama" value="<?=$s->nama?>">
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
    <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_pangkat" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Pangkat</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahBanyak/pangkat')?>" method="POST">
                          <label class="mr-2 row" for="nama">Pangkat</label>
                          <input class="p-2" type="text" name="pangkat" value="<?=$s->pangkat?>">
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
            <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_tmtpangkat" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah TMT Pangkat</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahBanyak/tmt_pangkat')?>" method="POST">
                          <label class="mr-2 row" for="nama">TMT Pangkat</label>
                          <input class="p-2" type="text" name="tmt_pangkat" value="<?=$s->tmt_pangkat?>">
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
            <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_pendidikan_terakhir" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Pendidikan Terakhir</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahBanyak/pendidikan_terakhir')?>" method="POST">
                          <label class="mr-2 row" for="nama"></label>
                          <input class="p-2" type="text" name="pendidikan_terakhir" value="<?=$s->pendidikan_terakhir?>">
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
            <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_ttl" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Tempat Tanggal Lahir</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahBanyak/ttl')?>" method="POST">
                          <label class="mr-2 row" for="nama"></label>
                          <input class="p-2" type="text" name="ttl" value="<?=$s->ttl?>">
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
            <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_jenis_kelamin" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Jenis Kelamin</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahBanyak/jenis_kelamin')?>" method="POST">
                          
                          <div class="p-4">
                            
                            <label class="form-control-label  pl-5 "><input type="radio" id="jk1" name="jenis_kelamin" value="Laki-laki" class="m-1"   >Laki-laki</label>
                            <label class="form-control-label  pl-5 "><input type="radio" id="jk2" name="jenis_kelamin" value="Perempuan" class="m-1"   >Perempuan</label>
                        </div>
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
            <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_status" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Status</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahBanyak/status')?>" method="POST">
                          
                          <div class="p-4">
                            
                            <label class="form-control-label  pl-5 "><input type="radio" id="jk1" name="status" value="Menikah" class="m-1"   >Menikah</label>
                            <label class="form-control-label  pl-5 "><input type="radio" id="jk2" name="status" value="Belum Menikah" class="m-1"   >Belum Menikah</label>
                        </div>
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
            <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_alamat" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Alamat</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahBanyak/alamat')?>" method="POST">
                          <label class="mr-2 row" for="nama"></label>
                          <textarea class="p-2" type="text" name="alamat" > <?=$s->alamat?></textarea>
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
            
            
            <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_telepon_kantor" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Telepon Kantor</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahBanyak/telepon_kantor')?>" method="POST">
                          <label class="mr-2 row" for="nama">TMT Pangkat</label>
                          <input class="p-2" type="text" name="telepon_kantor" value="<?=$s->telepon_kantor?>">
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
            <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_telepon_rumah" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Telepon</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahBanyak/telepon_rumah')?>" method="POST">
                          <label class="mr-2 row" for="nama"></label>
                          <input class="p-2" type="text" name="telepon_rumah" value="<?=$s->telepon_rumah?>">
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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

            <?php foreach ($sdm as $s) { ?>
              <div class="modal fade" id="modal_lembaga" tabindex="-1" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Lembaga</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('DetailSdm/UbahLem')?>" method="POST">
                      <label for="input-lembaga" class="from-control-label row">Pilih Lembaga untuk <strong class="ml-1"><?=$s->nama?> :</label>
                          <label class="form-control-label  pl-5 row"><input type="checkbox" id="lembaga" name="lspro" value="1" class="m-1"   >Lembaga Sertivikasi Produk (LSPRO)</label>
                          <label class="form-control-label  pl-5 row"><input type="checkbox" id="lembaga" name="lit" value="2" class="m-1"   >Lembaga Inspeksi Teknis (LIT)</label>
                          <label class="form-control-label  pl-5 row"><input type="checkbox" id="lembaga" name="peng" value="3" class="m-1"   >Laboratorium Pengujian</label>
                          <label class="form-control-label  pl-5 row"><input type="checkbox" id="lembaga" name="kal" value="4" class="m-1"   >Laboratorium Kalibrasi</label>
                          <input class="p-2" type="hidden" name="nip" value="<?=$s->nip?>">
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
            <?php foreach ($this->CI->portofolio($s->nip)->result() as $p) { ?>
              <div class="modal fade bd-example-modal-lg"  tabindex="-1" role="dialog" id="modal_porto<?= $p->id_portofolio;?>" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Portofolio</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                      <div class="p-4">
                        <form method="post" action=<?= base_url('DetailSdm/Edit_porto/'.$p->id_portofolio) ?> enctype="multipart/form-data">
                          <div class="pl-lg-4">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="row p-2">
                                    <label class="form-control-label col-3" for="input-pelatihan">Pelatihan yang Pernah Diikuti</label>
                                    <input type="text" id="input-pelatihan" name="pelatihan" class="form-control col-9" value="<?=$p->nama_pelatihan?>" >
                                  </div>  
                                  <div class="row p-2">
                                    <label class="form-control-label col-3" for="input-tahun">Tahun</label>
                                    <input type="text" id="input-tahun" name="tahun" class="form-control col-9" value="<?=$p->tahun_pelatihan?>" >
                                  </div>
                                  <div class="row p-2">
                                    <label class="form-control-label col-3" for="input-penyelenggara">Penyelenggara</label>
                                    <input type="text" id="input-penyelenggara" name="penyelenggara" class="form-control col-9" value="<?=$p->penyelenggara?>" >
                                  </div>
                                  <div class="row p-2">
                                    <label class="form-control-label col-3" for="sertifikat-lama">Sertifikat</label>
                                    <input class="p-2" type="hidden" name="sertifikat-lama" value="<?=$p->sertifikat?>">
                                    <a href="<?=base_url('assets/sertifikat/'.$p->sertifikat);?>" target="_blank"><label ><?=$p->sertifikat?></label></a>
                                  </div>
                                  <div class=" row p-2">
                                    <label class="form-control-label col-3" for="sertifikat">Ubah Sertifikat (Format Pdf): </label> <input class="ml-0  btn btn-secondary col-9" name="sertifikat-baru" type="file">
                                  </div>
                                  <div class="row p-2">
                                    <label class="form-control-label col-3" for="eval-lama">Form Evaluasi</label>
                                    <input class="p-2" type="hidden" name="eval-lama" value="<?=$p->form_evaluasi?>">
                                    <a href="<?=base_url('assets/sertifikat/'.$p->form_evaluasi);?>" target="_blank"><label ><?=$p->form_evaluasi?></label></a>
                                  </div>
                                  <div class=" row p-2">
                                    <label class="form-control-label col-3" for="sertifikat">Ubah Evaluasi (Format Pdf): </label> <input class="ml-0 btn btn-secondary col-9" name="evaluasi-baru" type="file">
                                  </div>
                                  <div class="row p-2">
                                    <label class="form-control-label col-3" for="eval-lama">Nota Dinas</label>
                                    <input class="p-2" type="hidden" name="kerja-lama" value="<?=$p->surat_kerja?>">
                                    <a href="<?=base_url('assets/sertifikat/'.$p->surat_kerja);?>" target="_blank"><label ><?=$p->surat_kerja?></label></a>
                                  </div>
                                  <div class=" row p-2">
                                    <label class="form-control-label col-3" for="sertifikat">Ubah Nota Dinas (Format Pdf): </label> <input class="ml-0 btn btn-secondary col-9" name="kerja-baru" type="file">
                                  </div>
                                  <div class="row p-2">
                                    <label class="form-control-label col-3" for="bukti-lama">Bukti</label>
                                    <input class="p-2" type="hidden" name="bukti-lama" value="<?=$p->bukti?>">
                                    <a href="<?=base_url('assets/sertifikat/'.$p->bukti);?>" target="_blank"><label ><?=$p->bukti?></label></a>
                                  </div>
                                  <div class=" row p-2">
                                    <label class="form-control-label col-3" for="bukti-baru">Ubah Bukti (Format Pdf): </label> <input class="ml-0 btn btn-secondary col-9" name="bukti-baru" type="file">
                                  </div>
                                  <input class="p-2" type="hidden" name="nip" value="<?=$p->nip?>">
                                  <div class=" row d-flex justify-content-around text-center">
                                    <button  class="btn btn-primary btn- my-4 col-2" value=""  type="submit">Simpan Perubahan</button>
                                    <a  href="<?=base_url('DetailSdm/hapus_porto/'.$p->id_portofolio.'/'.$p->nip)?>"> <button type="button" class="btn btn-danger my-4">Hapus Portofolio Ini</button></a>
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
              </div>
            <?php } ?>
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