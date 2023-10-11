<?php
session_start();
$usernamed = $_POST['username'];
$password = md5($_POST['password']);

include 'templates/dbconnect.php';
$cekuser = mysqli_query($dbconnect,"select * from user where username='$usernamed' and password='$password'");
$hitung = mysqli_num_rows($cekuser);
if($hitung>0){
    $data = mysqli_fetch_assoc($cekuser);
        if($data['role']=="1"){
            $_SESSION['username'] = $data['username'] ;
            $_SESSION['role'] = "1";
            echo "<script>
                    alert ('Selamat datang $usernamed anda masuk sebagai Admin!');
                    document.location.href='/adminSidesa/index.php';
                 </script>";
        }else if($data['role']=="2"){
            $_SESSION['username'] = $data['username'];
            $_SESSION['role'] = "2";
            echo "<script>
                    alert ('Selamat datang $usernamed anda masuk sebagai Pengunjung!');
                    document.location.href='index1.php';
                 </script>";
        }
}else{

    header("location:login.php");

}

?>
