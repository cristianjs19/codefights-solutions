<?php 

function addBorder($picture) {
    
    $ast =  str_repeat("*", strlen($picture[0])+2);
    
    for($i=0;$i<count($picture);$i++){
        $picture[$i] = "*" . $picture[$i];
        $picture[$i] = $picture[$i] . "*";
        
    }
    
    array_push($picture, $ast);
    array_unshift($picture, $ast);
    
    return $picture;
    

}


 ?>