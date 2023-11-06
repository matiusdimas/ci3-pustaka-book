<!-- Begin Page Content -->
<div class="container-fluid row ">
    <?php foreach ($anggota as $a) { ?>
        <div class="card mb-3 ml-3" style="max-width: 360px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $a['image']; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $a['nama']; ?></h5>
                        <p class="card-text"><?= $a['email']; ?></p>
                        <p class="card-text"><small class="text-muted">Jadi member sejak:
                                <br><b><?= date('d F Y', $a['tanggal_input']); ?></b></small></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->