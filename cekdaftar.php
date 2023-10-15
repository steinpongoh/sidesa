<?php
$nik=$_POST['nik'];
$usernamed=$_POST['username'];
$password=md5($_POST['password']);

include 'templates/dbconnect.php';

$result = mysqli_query($dbconnect, "SELECT username FROM user WHERE username = '$usernamed'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert ('Username sudah terdaftar!')
                document.location.href='daftar.php';
              </script>";
    }
$cekNIK = mysqli_query($dbconnect, "SELECT nik FROM penduduk WHERE nik = '$nik'");

    if(mysqli_fetch_assoc($cekNIK)) {
        mysqli_query($dbconnect,"INSERT INTO user (username, password, role) VALUES ('$usernamed','$password','2')");
        echo "<script>
                alert ('User berhasil terdaftar!')
                document.location.href='login.php';
            </script>";
    }else{
        echo "<script>
                alert ('NIK anda tidak terdaftar!')
                document.location.href='daftar.php';
            </script>";
    }

?>