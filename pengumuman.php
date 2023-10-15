<?php
include 'templates/header.php';
require 'function.php';
$query = query("SELECT * FROM pengumuman")
?>


<section class="pengumuman" id="pengumuman">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-10 text-center mb-3" data-aos="fade-left">
        <h1>Pengumuman Desa</h1>
        <p>Pengumuman Desa adalah area di mana informasi terbaru dan penting tentang kegiatan, peristiwa, kebijakan, atau pemberitahuan dari pemerintah desa.</p>
      </div>
      <div class="row justify-content-center kolom" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <?php foreach ($query as $pengumuman) { ?>
          <div class="col-md-9 kolom-child">
            <h2><?= $pengumuman['judul_pengumuman'] ?></h2>
            <p><?= $pengumuman['detail_pengumuman'] ?></p>
            <p><?php echo tgl_indo(date(substr($pengumuman['tanggal_pengumuman'], 0, 11))) ?></p>
            <p><?php echo date('H:i', strtotime(substr($pengumuman['tanggal_pengumuman'], 11))) ?></p>
          </div>
        <?php } ?>
      </div>
    </div>

  </div>


</section>
<?php
include 'templates/footer.php';
?>