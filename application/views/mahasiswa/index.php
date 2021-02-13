
<div class="container">
    <?php if ( $this->session->flashdata('flash')):?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong> Berhasil </strong>  <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>
<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
</div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Mahasiswa..">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"> Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="rows mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-grup">
                <?php foreach( $mahasiswa as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama']?>
                    <a href="<?= base_url();?>mahasiswa/hapus/<?= $mhs['id'];?>" class="badge rounded-pill bg-danger float-end" onclick="return confirm('yakin?');">Hapus</a>
                    <a href="<?= base_url();?>mahasiswa/ubah/<?= $mhs['id'];?>" class="badge rounded-pill bg-primary float-end">Ubah</a>
                    <a href="<?= base_url();?>mahasiswa/detail/<?= $mhs['id'];?>" class="badge rounded-pill bg-success float-end">Details</a>
                    
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>