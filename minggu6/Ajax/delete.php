<?php 
    include "connect.php";
    $id = $_POST['id'];
    $sql = "DELETE FROM mhs WHERE id = $id";
    $hasil = mysqli_query($db, $sql);
?>