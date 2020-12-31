<?php
    function arrayCount($array){
        $totalArray = count($array);
        return($totalArray);
    }   
    $tableau = array(
        "Marc",
        "Sophie",
        "Maguy",
        "Jonathan",
        "Jennifer");
    echo "Wow, Incroyable il y a ". arrayCount($tableau) . "noms dans se tableau ! </br>";

    $color = array(
        "green",
        "blue",
        "yellow",
        "purple",
        "red",
        "orange",
        "black",
        "white");
    echo "Mais c'est spectaculaire il y a ". arrayCount($color)." couleurs dans se tableau !";
?>