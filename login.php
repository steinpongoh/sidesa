<?php
include 'templates/header1.php';
include 'function.php';

?>
<section id="login" class="login">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-down-left">
      <form id="form" method="post" action="ceklogin.php" class="col-md-8 col-10 " enctype="multipart/form-data">
        <h1 class="text-center">Login</h1>
        <div class="container-form shadow p-5 mt-4 mb-4 rounded-2 border-top border-success border-3 bg-light">
        <div class="alert alert-primary" style="text-align:center;"role="alert"> Silahkan masukkan Nama dan Password untuk login.</div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input name="username" type="text" class="form-control form-control-sm border border border-black p-2 mb-2 border-opacity-50" autocomplete="off" required placeholder="Silahkan isikan nama anda!" id="nama">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" required placeholder="Password" id="password">
          </div>
          <input name="ingat" type="checkbox" required id="ingat">
          <label for="ingat" class="form-label">Ingat Saya</label>
          <div class="mt-3 d-flex justify-content-center">
            <button type="submit" id="masuk" name="masuk" class="btn btn-success">Masuk</button>
          </div><br>
          <p class="text-center">Belum punya Akun? <a href="daftar.php">Daftar sekarang!</a></p>
        </div>
      </form>
    </div>
  </div>

</section>

<?php
include 'templates/footer.php'
?>