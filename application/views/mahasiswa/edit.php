
<div class=container>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form edit data mahasiswa
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
                            <input type="text" class="form-control" value="<?= $mahasiswa['nama'] ?>" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" value="<?= $mahasiswa['nim'] ?>" id="nim" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" value="<?= $mahasiswa['email'] ?>" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control" name="jurusan">
                                <?php foreach ($jurusan as $key):
                                    if ($key == $mahasiswa['jurusan']) {
                                        ?>
                                        <option value="<?=$key ?>" selected="<?=$key ?>"><?=$key ?></option>
                                        <?php
                                    } else {
                                        ?>
                                        <option value="<?=$key ?>"><?=$key ?></option>
                                        <?php
                                    }
                                    ?>
                                <?php endforeach; ?>
                                <!-- <option value="Kimia">Kimia</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Mesin">Mesin</option> -->
                            </select>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary" float="none">edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>