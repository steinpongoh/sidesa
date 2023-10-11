<?php
include 'templates/header.php';
require 'function.php';

$query = query("SELECT * FROM `event`");
?>


<section class="event" id="event">
    <div class="container">
        <h1 class="text-center" data-aos="fade-left">Event Desa</h1>
        <p class="text-center" data-aos="fade-left">Sistem informasi Desa Tondangow menyediakan informasi-informasi terkait Event/Acara yang ada di Desa Tondangow</p>
        <div class="row row-cols-1 row-cols-md-2 g-5 py-8" data-aos="fade-right">
            <?php foreach ($query as $event) { ?>
                <div class="col">
                    <a href="detailEvent.php?id=<?= $event['id'] ?>" class="text-decoration-none fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card card-event">
                            <img src="img/event/<?= $event['gambar'] ?>" class="card-img-top" alt="..." />
                            <div class="mb-5 d-flex justify-content-around">
                                <p><?= $event['judul_acara'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="modal fade event-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Judul Acara</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-image-event ">
                        <img src="img/umkm/1.jpg" alt="" class="card-img-event" />
                    </div>
                    <p class="lokasi-event">Lokasi</p>
                    <p class="tanggal-event">Tanggal Event</p>
                    <p class="detail-event">Detail Event <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro soluta cum fuga quidem autem id odio dolor velit vero, aut ullam quaerat quod ad! Beatae blanditiis et assumenda ex tempore, labore odio maxime eligendi corporis, architecto debitis sit accusamus vel aspernatur soluta necessitatibus, neque iusto natus reprehenderit quidem cum expedita a delectus? Voluptates id dicta fugiat porro maiores dolorum voluptatibus quaerat aliquid ullam mollitia animi ipsum incidunt unde eos, possimus illum non tenetur! Nihil possimus eveniet, quasi modi iste quibusdam, repudiandae saepe a deleniti cumque dignissimos distinctio, exercitationem culpa? Rem et eius aliquam sint? Labore officiis suscipit beatae repellendus eum.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</section>
<?php
include 'templates/footer.php';
?>