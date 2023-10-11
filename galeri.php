<?php
include 'templates/header.php';
require 'function.php';
$query = query("SELECT * FROM galeri");
?>

<section id="gallery" class="gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-10 text-center" data-aos="zoom-in-left">
                <h1>Galeri Desa</h1>
                <p>Galeri ini dibuat untuk mempromosikan desa, menampilkan budaya, tradisi, keindahan alam, dan kegiatan masyarakat Desa Tondangow.</p>
            </div>
            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center" data-aos="zoom-in-right">
                <?php foreach ($query as $foto) { ?>
                    <div class="col mt-3">
                        <a href=" img/galeri/<?= $foto['gambar'] ?>" data-toggle="lightbox" data-caption="<?= $foto['caption'] ?>" data-gallery="mygallery">
                            <img src="img/galeri/<?= $foto['gambar'] ?>" alt="<?= $foto['caption'] ?>" class="img-fluid w-100 rounded">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


</section>
<?php
include 'templates/footer.php';
?>