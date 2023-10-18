<?php
include 'templates/header.php';
require 'function.php';

// Fetch data from the database
$query = query('SELECT DISTINCT
    penduduk.nama,
    penduduk.nik,
    penjual.id_penjual,
    penjual.nama_penjual,
    penjual.no_telepon,
    penjual.alamat_toko,
    penjual.link_alamat_toko,
    produk.id_produk,
    produk.id_penjual,
    produk.nama_produk,
    produk.harga,
    produk.gambar,
    produk.deskripsi
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
                                    <button class="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $content['id_produk'] ?>">Info Selengkapnya</button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- Modal UMKM Start -->
        <?php foreach ($query as $content) { ?>
            <div class="modal fade" id="exampleModal<?= $content['id_produk'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel"><?= $content['nama_produk'] ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image-model">
                                        <img src="img/umkm/<?= $content['gambar'] ?>" alt="" class="card-img-model" />
                                    </div>
                                </div>
                                <div class="card-content-model">
                                    <p class="deskripsi-modal"><?= $content['deskripsi'] ?></p>
                                    <p class="alamat text-center"><?= $content['alamat_toko'] ?></p>
                                    <p class="kontak text-center"><?= $content['no_telepon'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= $content['link_alamat_toko'] ?>">
                                <button type="button" class="btn btn-danger"><i class="bi bi-geo-alt"></i> Lokasi</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Modal UMKM End -->
    </div>
</section>

<?php
include 'templates/footer.php';
?>