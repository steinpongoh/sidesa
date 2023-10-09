<?php
    require_once 'templates/dbconnect.php';

    function query($query) {
        global $dbconnect;
        $result=mysqli_query($dbconnect,$query);
        $rows=[];
        while($row=mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

    function pengaduan($data, $file){
        global $dbconnect;
        $nama_pengadu=$data['nama'];
        $alamat_lengkap=$data['alamat'];
        $no_telepon=$data['no_telp'];
        $judul_pengaduan=$data['judul'];
        $tanggal_pengaduan=$data['tanggal'];
        $isi_pengaduan=$data['detail'];

        $direktori='img/pengaduan/';
        $foto=$file['gambar']['name'];
        move_uploaded_file($file['gambar']['tmp_name'],$direktori.$foto);
        $queryAdd="INSERT INTO pengaduan VALUES('','$nama_pengadu','$alamat_lengkap','$judul_pengaduan','$isi_pengaduan','$tanggal_pengaduan','$no_telepon','$foto')";
        mysqli_query($dbconnect, $queryAdd);
        return mysqli_affected_rows($dbconnect);
    }
    
?>