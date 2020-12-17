<?php 
    include "connect.php";
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];
    $sql = "INSERT INTO mhs (nim, nama, prodi, angkatan) VALUES ('$nim', '$nama', '$prodi', '$angkatan')";
    $hasil = mysqli_query($db, $sql);
?>