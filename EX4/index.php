<?php
// mes tests
  // $string ="debile";
        // $rest = substr($string , 0 , 1);
        // if($rest == "i"){
        //     echo $string;
        // }else{
        //     echo "eh non !";
        // }
// premiere methode
    $tableau = array(
    "Marc",
    "Sophie",
    "Maguy",
    "Jonathan",
    "Jennifer");
    echo "bonjour ".$tableau[3]."</br>";
    echo "bonjour ".$tableau[4]."</br>";
    echo "</br>";

// deuxieme methode
    $tableau = array(
        "Marc",
        "Sophie",
        "Maguy",
        "Jonathan",
        "Jennifer");
    foreach($tableau as $value){
         $rest = substr($value , 0 , 1);
         if($rest == "J"){
            echo "bonjour ".$value ."</br>";
        }else{
        }
    }
        
?>