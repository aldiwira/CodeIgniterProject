<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail data mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $mahasiswa['nama']; ?>
                    </h5>
                    <p class="card-text">
                    <?= $mahasiswa['nim']; ?>
                    </p>
                    <p class="card-text">
                    <?= $mahasiswa['email']; ?>
                    </p>
                    <p class="card-text">
                    <?= $mahasiswa['jurusan']; ?>
                    </p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">back home</a>
                </div>
            </div>
        </div>
    </div>
</div>