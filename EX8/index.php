<?php 
    function puchArray($tab , $string){
        array_push($tab , $string);
    }
    $tableau = array(
        "Marc",
        "Sophie",
        "Maguy",
        "Jonathan",
        "Jennifer");
    puchArray($tableau ,"Prune");
    foreach($tableau as $value){
        echo $value . "</br>" ;
    }
?>