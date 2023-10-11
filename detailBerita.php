<?php
include 'templates/header.php';

$id=$_GET['id'];
$query=mysqli_query($dbconnect,"select * from berita where id='$id'");
$berita=mysqli_fetch_array($query);

// membaca input dari form
$input =$berita['detail_berita'];
 
// memecah string input berdasarkan karakter '\r\n\r\n'
$pecah = explode("\r\n\r\n", $input);
 
// string kosong inisialisasi
$text = " ";
 
// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
// lalu menggabungnya menjadi satu string utuh $text
for ($i=0; $i<=count($pecah)-1; $i++)
{
   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
   $text .= $part;
}
?>

<section class="detailBerita" id="detailBerita">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2><?php echo $berita['judul_berita'];?></h2>
                <p class="text-start"><?php echo $berita['tanggal_berita'];?></p>
                <div class="col-md-4 img-detail">
                    <img src="img/sejarahdesa.jpg" class="mx-auto d-block" alt="">
                </div>
                <div class="col-md-8 justify-content-center w-100">
                    <p class="isi-berita"><?php echo $berita['detail_berita']=$text;?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'templates/footer.php';
?>