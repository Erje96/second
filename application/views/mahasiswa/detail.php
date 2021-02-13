<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                Detail Data Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                <div class="card-footer text-muted">
                    <?= $mahasiswa['email']; ?>
                </div>
                <p class="card-text"><?= $mahasiswa['nrp'];?></p>
                <h5 class="card-title"><?= $mahasiswa['jurusan']?></h5>
                <a href="<?= base_url();?>mahasiswa" class="btn btn-primary float-end">Kembali</a>
            </div>
            </div>


        </div>
    </div>
</div>