<?php
include 'templates/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Gunakan prepared statement untuk mencegah SQL injection
    $query = mysqli_prepare($dbconnect, "SELECT * FROM berita WHERE id = ?");
    mysqli_stmt_bind_param($query, 'i', $id);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);

    if ($result && $berita = mysqli_fetch_array($result)) {
        $input = $berita['detail_berita'];
        $pecah = explode("\r\n\r\n", $input);

        $text = '';

        for ($i = 0; $i < count($pecah); $i++) {
            $text .= "<p>{$pecah[$i]}</p>";
        }
    } else {
        echo "Berita tidak ditemukan.";
        exit();
    }
} else {
    echo "ID berita tidak valid.";
    exit();
}
?>

<section class="detailBerita" id="detailBerita">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2><?php echo $berita['judul_berita']; ?></h2>
                <p class="text-start"><?php echo $berita['tanggal_berita']; ?></p>
                <div class="col-md-4 img-detail">
                    <img src="img/galeri/<?= $berita['gambar'] ?>" class="mx-auto d-block" alt="">
                </div>
                <div class="col-md-8 justify-content-center w-100 isi-berita">
                    <?php echo $text; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'templates/footer.php';
?>