<?php
include 'templates/header.php';
include 'function.php';

$queryPengaduan = query('SELECT * FROM pengaduan');

?>

<section id="pengaduan" class="pengaduan">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-down-left">
        <h1 class="text-center">Pengaduan Masyarakat</h1>
        <p class="text-center">Sistem Informasi Desa Tondangow menyediakan forum pengaduan masyarakat, apabila ada masyarakat yang ingin melakukan pengaduan</p>
        <div class="shadow p-5 mt-4 mb-4 rounded-2 border-top border-success border-3 bg-light">
        <a href="pengaduan.php" class="float-end btn btn-danger">Buat Pengaduan
        </a><br>
        <br>
        <table class="table table-bordered border-primary" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark border-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Judul Pengaduan</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Detail Pengaduan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($queryPengaduan as $rows) { ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?php echo $rows['nama_pengadu'] ?></td>
                        <td><?php echo $rows['alamat_lengkap'] ?></td>
                        <td>
                            <img width="60px" height="60px" src="img/pengaduan/<?php echo $rows['gambar']?>" alt="">
                        </td>
                        <td><?php echo $rows['judul_pengaduan']?></td>
                        <td><?php echo date('d M Y H:i', strtotime($rows['tanggal_pengaduan']))?></td>
                        <td><?php echo $rows['detail_pengaduan']?></td>
                        <td></td>
                    </tr>
                <?php $i++ ?>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
  </div>

</section>

<?php
include 'templates/footer.php'
?>