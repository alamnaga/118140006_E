<?php 
    include "connect.php";
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];
    $sql = "UPDATE mhs SET nim = '$nim', nama = '$nama', prodi = '$prodi', angkatan = '$angkatan' WHERE nim = $nim";
    $hasil = mysqli_query($db, $sql);
?>