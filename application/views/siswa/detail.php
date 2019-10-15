<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail data mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $siswa['nama']; ?>
                    </h5>
                    <p class="card-text">
                    <?= $siswa['nim']; ?>
                    </p>
                    <p class="card-text">
                    <?= $siswa['alamat']; ?>
                    </p>
                    <a href="<?= base_url(); ?>siswa" class="btn btn-primary">Back Home</a>
                </div>
            </div>
        </div>
    </div>
</div>