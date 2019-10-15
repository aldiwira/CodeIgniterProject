<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= base_url(); ?>">CI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php base_url(); ?>mahasiswa">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php base_url(); ?>mahasiswa">Data Mahasiswa</a>
      <a class="nav-item nav-link" href="<?php base_url(); ?>siswa">Data Siswa</a>
      <a class="nav-item nav-link" href="<?php base_url(); ?>">About</a>
      <a class="nav-item nav-link" href="<?php base_url(); ?>user/laporan_pdf">Download Laporan</a>
      <a class="nav-item nav-link" href="<?php base_url(); ?>login/logout">Log Out</a>
    </div>
  </div>
</nav>