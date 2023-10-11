<?php
include 'templates/header.php';
include 'function.php';

?>

<section id="login" class="login">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-down-left">
      <form id="form" method="post" action="" class="col-md-8 col-10 " enctype="multipart/form-data">
        <h1 class="text-center">Login</h1>
        <div class="container-form shadow p-5 mt-4 mb-4 rounded-2 border-top border-success border-3 bg-light">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input name="username" type="text" class="form-control form-control-sm border border border-black p-2 mb-2 border-opacity-50" id="nama">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="text" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" id="password">
          </div>
          <div class="mt-3">
            <button type="submit" id="kirim" name="kirim" class="btn btn-success d-flex justify-content-end">Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</section>

<?php
include 'templates/footer.php'
?>