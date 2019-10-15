<div class="container" style="margin-top:20px">
    <div class="col-md-1">
        <h1 style="text-align: center; margin-bottom:30px">Data Mahasiswa</h1>
    </div>
    <table class="table table-striped table-bordered" id="list_mhs">
        <thead>
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=1;
                foreach ($mahasiswa as $mhs) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs->nim;?></td>
                    <td><?= $mhs->nama;?></td>
                    <td><?= $mhs->alamat;?></td>
                </tr>
                <?php }
            ?>
        </tbody>
    </table>
</div>