<?php 
    include 'connect.php';
    $query = "SELECT * FROM mhs GROUP BY nim ASC";
    $hasil = mysqli_query($db, $query);
    $array = [];
    foreach($hasil as $h){
        $array[] = $h;
    }

    echo json_encode($array);
?>