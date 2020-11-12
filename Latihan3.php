<?php

$i = 2; //karena bil prima itu bil yang lebih dari 1

    while($i<=50){
        if($i%2!=0 && $i%5!=0 && $i%7!=0 && $i%3!=0){
            echo "$i  ";
        } elseif ($i==2 || $i==3 || $i==5 || $i==7){
            echo "$i  ";
        }
        
        $i++;
    
    }
?>