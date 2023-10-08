<?php
include 'templates/header.php';

?>

<section id="pengaduan" class="pengaduan">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-10 ">
        <h1 class="text-center">Pengaduan Masyarakat</h1>
        <p class="text-center">Sistem Informasi Desa Tondangow menyediakan forum pengaduan masyarakat, apabila ada masyarakat yang ingin melakukan pengaduan</p>
        <div class="container-form shadow p-5 mt-4 mb-4 rounded-2 border-top border-success border-3 bg-light">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control form-control-sm border border border-black p-2 mb-2 border-opacity-50" id="nama">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" id="alamat">
          </div>
          <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon:</label>
            <input type="number" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" id="no_telp">
          </div>
          <div class="mb-3">
            <label for="judul" class="form-label">Judul:</label>
            <input type="text" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" id="judul">
          </div>
          <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal pengaduan:</label>
            <input type="date" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" id="tanggal">
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Foto:</label>
            <input class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" id="gambar" type="file">
          </div>
          <div class="mb-3">
            <label for="detail" class="form-label">Isi Pengaduan:</label>
            <textarea class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" id="detail" rows="5"></textarea>
          </div>
          <div class="mt-3">
            <button type="button" id="kirim" name="kirim" class="btn btn-success d-flex justify-content-end">Kirim</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'templates/footer.php'
  ?>
</section>