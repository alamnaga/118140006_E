<?php 
    include "connect.php";

    $id = $_POST['id'];
    $query = "SELECT * FROM mhs WHERE id = $id";
    $hasil = mysqli_query($db, $query);
    foreach($hasil as $h){
        $array = $h;
    }

    echo json_encode($array);
?>