<?php 
  $tableau = array(
    "Marc",
    "Sophie",
    "Maguy",
    "Jonathan",
    "Jennifer");
    foreach($tableau as $value){
        if(strlen($value)%2 == 1){
        echo $value ." et il y a " . strlen($value) ." mots dans la chaine et c'est impair !</br>";
        }else{
        echo $value ." et il y a " . strlen($value) ." mots dans la chaine et c'est pair !</br>";    
        }
    }
    ?>