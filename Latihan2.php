<?php

    $nama = array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");

    asort($nama);
    echo "Data Diurutkan Ascending <br>";
    foreach($nama as $data){
        echo $data;
        echo " ";
    }
      echo "<br><br>";
      
      rsort($nama);
    echo "Data Diurutkan Descending <br>";
    foreach($nama as $data){
        echo $data;
        echo " ";
    }
?>