<?php
include 'templates/header.php';
require 'function.php';

$query = query('SELECT * FROM berita');

?>

<section id="berita" class="berita">
  <div class="container">
    <div class="container" data-aos="fade-right">
      <h1 class="text-center">BERITA</h1>
      <p class="text-center">Berikut ini adalah berita seputar Desa Tondangow.</p>
      <?php foreach ($query as $berita) { ?>
        <div class="row g-0 bg-body-secondary position-relative shadow border-top border-success rounded-2 border-3 mt-5">
          <div class="col-md-6 mb-md-0 p-md-4">
            <img src="img/galeri/<?= $berita['gambar'] ?>" class="img-fluid mx-auto d-block w-100 animate__animated animate__zoomIn rounded-3" alt="">
          </div>
          <div class="col-md-6 p-4 ps-md-0 animate__animated animate__fadeIn">
            <h5 class="text-center mt-0 text-uppercase text"><?= $berita['judul_berita'] ?></h5>
            <p class="d-block" style="max-height:250px; text-align: justify; text-indent:30px; overflow: auto;"><?php echo $berita['detail_berita'] ?></p>
            <!-- <a href="detailBerita.php?id=" class="stretched-link"></a> -->
          </div>

        </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php
include 'templates/footer.php';
?>