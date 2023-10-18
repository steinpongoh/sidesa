<?php
include 'templates/header.php';
include 'function.php';
$jumlahPenduduk = count(query('SELECT * FROM penduduk'));
$jumlahKepalaKeluarga = count(query('SELECT * FROM keluarga'));
$jumlahPria = count(query('SELECT * FROM penduduk WHERE jenis_kelamin = "Pria"'));
$jumlahWanita = count(query('SELECT * FROM penduduk WHERE jenis_kelamin = "Wanita"'))
?>

<!-- Home -->
<section id="home" class="home w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
  <main>
    <h3 class="animate__animated animate__slideInLeft">SISTEM INFORMASI</h3>
    <h1 class="animate__animated animate__slideInRight">DESA TONDANGOW</h1>
  </main>
</section>
<!-- Home -->

<!-- Highlight Berita Start -->



<!-- Highlight Berita End-->


<!-- Statistik Kependudukan -->
<section id="statistik" class="statistik">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center" data-aos="fade-down-left">
      <h2>Statistik Kependudukan</h2>
      <div class="col-lg-6 d-flex justify-content-between align-items-center w-100 h-100">
        <span><i class="bi bi-people"></i><br />
          <h2><?php echo $jumlahPenduduk; ?></h2>
          <h5>Jumlah Penduduk</h5>
        </span>
        <span><i class="bi bi-person-vcard"></i><br />
          <h2><?php echo $jumlahKepalaKeluarga ?></h2>
          <h5>Kepala Keluarga</h5>
        </span>
        <span><i class="bi bi-gender-male"></i><br />
          <h2><?php echo $jumlahPria ?></h2>
          <h5>Laki-Laki</h5>
        </span>
        <span><i class="bi bi-gender-female"></i><br />
          <h2><?php echo $jumlahWanita ?></h2>
          <h5>Perempuan</h5>
        </span>
      </div>
    </div>
  </div>
</section>
<!-- Statistik Kependudukan -->
<?php include 'templates/footer.php'; ?>