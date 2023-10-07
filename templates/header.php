<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SI Desa</title>

  <!-- Bootstrap Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet" />

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <!-- Animated.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <nav class="navbar navbar-expand-md bg-body-transparent fixed-top mynavbar">
    <div class="container">
      <a class="navbar-brand animate__animated animate__lightSpeedInLeft" href="index.php">Desa Tondangow</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            Desa Tondangow
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav ms-auto">
            <a class="nav-link animate__animated animate__fadeIn" href="index.php">Beranda</a>
            <a class="nav-link animate__animated animate__fadeIn" href="berita.html">Berita</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle animate__animated animate__fadeIn" href="#profil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil Desa
              </a>
              <ul class="dropdown-menu text-center border-0">
                <li>
                  <a class="dropdown-item" href="#strukturpemerintah">Struktur Pemerintahan</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#visimisi">Visi Misi Desa</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#sejarahdesa">Sejarah Desa</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#tatatertib">Tata Tertib Desa</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#statistik">Statistik Kependudukan</a>
                </li>
              </ul>
            </li>
            <a class="nav-link animate__animated animate__fadeIn" href="pengumuman.html">Pengumuman</a>
            <a class="nav-link animate__animated animate__fadeIn" href="event.html">Event</a>
            <a class="nav-link animate__animated animate__fadeIn" href="umkm.html">UMKM</a>
            <a class="nav-link animate__animated animate__fadeIn" href="galeri.php">Galeri</a>
            <a class="nav-link animate__animated animate__fadeIn" href="pengaduan.html">Pengaduan Masyarakat</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>