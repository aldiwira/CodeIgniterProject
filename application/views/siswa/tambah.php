
<div class=container>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah data siswa
                </div>
                <div class="card-body">
                <?php if (validation_errors()): ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" float="none">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>