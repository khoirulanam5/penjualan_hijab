<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="row el-element-overlay container">
    <?php $this->load->view('public/slider'); ?>

    <?php if ($this->session->flashdata('message')): ?>
        <script>
            <?= $this->session->flashdata('message'); ?>
        </script>
        <?php $this->session->unset_userdata('message'); ?>
    <?php endif; ?>

    <?php
    foreach ($datas as $key => $value) {
        $imgcek = file_exists(FCPATH . 'images/' . $value->images) ? $value->images : 'noimages.jpg';
        $stok = $value->jml_stok == 0 ? "#" : base_url('public/home/detail/') . $value->id_produk;

        // Cek apakah pelanggan sudah login
        if (!$this->session->userdata('username')) {
            // Tampilan SEBELUM pelanggan login (sederhana)
            ?>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item pb-3">
                        <div style="height:300px;" class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center">
                            <img style="object-fit: contain; height: 300px;" src="<?= base_url("images/") . $imgcek ?>" class="d-block position-relative w-100" alt="user" />
                        </div>
                        <div class="no-block align-items-center">
                            <div class="row col-md-12" style="margin-left:5px">
                                <h5 class="mb-0"><?= htmlspecialchars($value->nama_produk) ?></h5>
                                <small class="text-muted"><?= htmlspecialchars($value->jenis_pro) ?></small>
                            </div>
                            <div class="row col-md-12" style="margin-top:20px; margin-left:4px">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <span class="btn btn-black btn-square btn-md">
                                        <?= rp($value->harga_jualpro) ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } else {
            // Tampilan SETELAH pelanggan login (kompleks)
            ?>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item pb-3">
                        <div style="height:300px;" class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center">
                            <img style="object-fit: contain; height: 300px;" src="<?= base_url("images/") . $imgcek ?>" class="d-block position-relative w-100" alt="<?= htmlspecialchars($value->nama_produk) ?>" />
                            <div class="el-overlay w-100 overflow-hidden">
                                <ul class="list-style-none el-info text-white text-uppercase d-inline-block p-0">
                                    <li class="el-item d-inline-block my-0 mx-1">
                                        <a class="btn default btn-outline image-popup-vertical-fit el-link text-white border-white" href="<?= base_url("images/") . $value->images ?>">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </li>
                                    <li class="el-item d-inline-block my-0 mx-1">
                                        <a class="btn default btn-outline el-link text-white border-white" href="<?= $stok ?>">
                                            <i class="icon-link"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="<?= base_url("produk/detail/") . $value->id_produk ?>" class="btn btn-danger btn-sm" style="position: absolute; right: 0px; border-radius: 135px; top: 264px;">
                            Sisa <?= htmlspecialchars($value->jml_stok) ?>
                        </a>
                        <div class="no-block align-items-center">
                            <div class="row col-md-12" style="margin-left:5px">
                                <h5 class="mb-0">
                                    <?= htmlspecialchars($value->nama_produk) ?>
                                </h5>
                                <small class="text-muted">
                                    <?= htmlspecialchars($value->jenis_pro) ?>
                                </small>
                            </div>
                            <div class="row col-md-12" style="margin-top:20px; margin-left:4px">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-12">
                                    <div>
                                        <?php if ($diskon_pelanggan === 'harga_khusus'): ?>
                                            <div>
                                                <p class="text-success font-weight-bold" style="margin: 0; font-size: 14px;">
                                                    <i class="fas fa-crown"></i> Harga Diskon 50% Khusus Untuk Member Langganan!
                                                </p>
                                                <del class="text-muted" style="font-size: 14px;">
                                                    <?= rp($value->harga_jualpro) ?>
                                                </del>
                                                <br>
                                                <span class="text-success" style="font-size: 16px; font-weight: bold;">
                                                    <?= rp($value->harga_khusus) ?>
                                                </span>
                                            </div>
                                        <?php elseif ($diskon_pelanggan === 'harga_diskon'): ?>
                                            <div>
                                                <del class="text-muted">
                                                    <?= rp($value->harga_jualpro) ?>
                                                </del>
                                                <br>
                                                <span class="text-danger">
                                                    <?= rp($value->harga_diskon) ?>
                                                </span>
                                            </div>
                                        <?php else: ?>
                                            <div>
                                                <span class="text-dark">
                                                    <?= rp($value->harga_jualpro) ?>
                                                </span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
