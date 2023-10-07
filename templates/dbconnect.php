<?php
$dbconnect = mysqli_connect("localhost", "root", "", "desa");

// Cek apakah ada error di database
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
