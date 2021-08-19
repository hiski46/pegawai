<div class="header bg-primary pb-3">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-3">
                <div class=" text-white col-lg-6 col-7">
                   <p> backuped database : <?php print_r($this->session->userdata('database'));  ?></p>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="<?= base_url("login/logout") ?>" class="btn btn-sm btn-neutral"> <i class="ni ni-user-run text-primary"></i> logout</a>
                </div>
            </div>
        </div>
    </div>
</div>