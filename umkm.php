<?php
include 'templates/header.php';
require 'function.php';

$query = query('SELECT DISTINCT
penduduk.nama,
penduduk.nik,
penjual.id_penjual,
penjual.nama_penjual,
penjual.no_telepon,
penjual.alamat_toko,
produk.id_produk,
produk.id_penjual,
produk.nama_produk,
produk.harga,
produk.gambar 

FROM produk 
JOIN penjual ON produk.id_penjual=penjual.id_penjual
JOIN penduduk ON penjual.nama_penjual=penduduk.id');

?>

<section class="produk" id="produk">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-10 text-center" data-aos="fade-down-left">
                <h1>UMKM Desa</h1>
                <p>Sistem informasi Desa Tondangow menyediakan informasi-informasi terkait UMKM yang ada di Desa Tondangow</p>
            </div>
            <div class="slide-container swiper" data-aos="fade-down-right">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <?php foreach ($query as $content) { ?>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>   
                                    <div class="card-image">
                                        <img src="img/umkm/<?= $content['gambar'] ?>" alt="" class="card-img" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name"><?= $content['nama_produk'] ?></h2>
                                    <p class="harga">Rp<?= $content['harga'] ?></p>
                                    <a href="detailUmkm.php?id=<?= $content['id_produk'] ?>">
                                        <button class="button">Info Selengkapnya</button></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<?php
include 'templates/footer.php';
?>