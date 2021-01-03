<?php 
    function puchArray($tab , $string){
       array_push($tab , $string);
       return($tab);
    }
    $tableau = array(
        "Marc",
        "Sophie",
        "Maguy",
        "Jonathan",
        "Jennifer");
        
    puchArray($tableau ,"fabrice");
    foreach($tableau as $value){
        echo $value . "</br>" ;
    }
?>