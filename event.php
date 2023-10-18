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
                    <a href="detailEvent.php?id=<?= $event['id'] ?>" class="text-decoration-none fs-5">
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

</section>
<?php
include 'templates/footer.php';
?>