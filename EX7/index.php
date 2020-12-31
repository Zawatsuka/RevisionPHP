<?php 
    function inverseArray($a){
        foreach($a as $value){
            echo $value . " et son inverse est " . strrev($value)."</br>";
        }
    }
    $tableau = array(
        "Marc",
        "Sophie",
        "Maguy",
        "Jonathan",
        "Jennifer");
    
     $color = array(
        "green",
        "blue",
        "yellow",
        "purple",
        "red",
        "orange",
        "black",
        "white");
    echo inverseArray($tableau);
    echo inverseArray($color);

?>