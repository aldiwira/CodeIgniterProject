<div class="container">
    <?php if ($this->session->flashdata('flash-data')) { ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?= $this->session->flashdata('flash-data'); ?>
        </div>
    <?php } ?>
    <div class="row mt-4">
        <h2>Daftar Mahasiswa</h2>
            <div class="col-md-6 my-2">
                <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah data</a>
            </div>
        <div>
            <form action="" method="POST" class="form-inline my-10 my-lg-2">
                <div class="input-group">
                    <input class="form-control mr-sm-2" type="text" placeholder="Cari data siswa" id="nama" name="key">
                </div>
                <button class="btn btn-outline-primary my-1 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group"> 
                <?php if (empty($mahasiswa)) {?>
                    <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan
                    </div>
                <?php }?>
                <?php foreach ($mahasiswa as $mhs) {?>
                    <li class="list-group-item">
                        <?php echo $mhs->nama ?>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs->id; ?>" 
                        class="badge badge-danger float-right"
                        onclick="return confirm('Yakin ingin menghapus data ini');">Hapus</a>

                        <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs->id; ?>" 
                        class="badge badge-success float-right">Edit</a>
                        
                        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs->id; ?>" 
                        class="badge badge-primary float-right">Detail</a>
                    </li>
                    
                <?php } ?>
            </ul>
        </div>
    </div>
</div>