<?php
// premiere methode
$tableau = array(
    "Marc",
    "Sophie",
    "Maguy",
    "Jonathan",
    "Jennifer");
        echo "bonjour ". $tableau[0] ."</br>" ;
        echo "bonjour ". $tableau[1] ."</br>" ;
        echo "bonjour ". $tableau[2] ."</br>" ;
        echo "bonjour ". $tableau[3] ."</br>" ;
        echo "bonjour ". $tableau[4] ."</br>" ;
        echo "</br>" ;
// deuxieme methode
    $tableau = array(
    "Marc",
    "Sophie",
    "Maguy",
    "Jonathan",
    "Jennifer");
    foreach($tableau  as $value){
        echo "bonjour ". $value ."</br>" ;
    }
?>