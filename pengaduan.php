<?php
include 'templates/header.php';
include 'function.php';

if (isset($_POST['kirim'])) {
  if (pengaduan($_POST, $_FILES) > 0) {
    echo "<script>
      alert('Pengaduan Berhasil Di Kirim')
      document.location.href='pengaduan.php'
    </script>";
  } else {
    echo "<script>
      alert('Pengaduan Gagal Di Kirim')
    </script>";
  }
}

?>

<section id="pengaduan" class="pengaduan">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-down-left">
      <form id="form" method="post" action="" class="col-md-8 col-10 " enctype="multipart/form-data">
        <h1 class="text-center">Pengaduan Masyarakat</h1>
        <p class="text-center">Pastikan NIK anda sudah terdaftar sebelum mengisi Pengaduan</p>
        <div class="container-form shadow p-5 mt-4 mb-4 rounded-2 border-top border-success border-3 bg-light">
          <div class="mb-3">
            <label for="nik" class="form-label">NIK:</label>
            <input name="nik" type="number" class="form-control form-control-sm border border border-black p-2 mb-2 border-opacity-50" autocomplete="off" id="nik">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap:</label>
            <input name="nama" type="text" class="form-control form-control-sm border border border-black p-2 mb-2 border-opacity-50" autocomplete="off" id="nama">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input name="alamat" type="text" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" autocomplete="off" id="alamat">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input name="email" type="email" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" autocomplete="off" id="email">
          </div>
          <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon:</label>
            <input name="no_telp" type="number" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" autocomplete="off" id="no_telp">
          </div>
          <div class="mb-3">
            <label for="judul" class="form-label">Judul:</label>
            <input name="judul" type="text" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" autocomplete="off" id="judul">
          </div>
          <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal pengaduan:</label>
            <input name="tanggal" type="datetime-local" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" id="tanggal">
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Foto:</label>
            <input name="gambar" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" id="gambar" type="file">
          </div>
          <div class="mb-3">
            <label for="detail" class="form-label">Isi Pengaduan:</label>
            <textarea form="form" name="detail" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" autocomplete="off" id="detail" rows="5"></textarea>
          </div>
          <div class="mt-3">
            <button type="submit" id="kirim" name="kirim" class="btn btn-success d-flex justify-content-end">Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</section>

<?php
include 'templates/footer.php'
?>