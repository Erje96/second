<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" name="nrp" class="form-control" id="nrp">
                            <div class="form-text text-danger"><?= form_error('nrp'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <div class="form-text text-danger"><?= form_error('email'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Informatika">Informatika</option>
                                <option value="Mesin">Mesin</option>
                                <option value="Elektro">Elektro</option>
                                <option value="Planologi">Planologi</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary mt-3 float-end">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>