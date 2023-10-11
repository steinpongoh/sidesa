<?php
$usernamed=$_POST['username'];
$password=md5($_POST['password']);

include 'templates/dbconnect.php';

$result = mysqli_query($dbconnect, "SELECT username FROM user WHERE username = '$usernamed'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert ('Username sudah terdaftar')
              </script>";
        return false;
    }

if(empty($usernamed && $password)){
    header('location:daftar.php');
}else{
    mysqli_query($dbconnect,"INSERT INTO user (username, password, role) VALUES ('$usernamed','$password','2')");

        echo "<script>
                alert ('User berhasil ditambahkan');
                document.location.href='login.php';
            </script>";
}
?>