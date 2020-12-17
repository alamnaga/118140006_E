<?php 
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $database = 'dataMhs';
    $db = mysqli_connect($host, $user, $pwd, $database);
    if(!$db){
        die("Koneksi gagal:".mysqli_connect_error());
    }
?>