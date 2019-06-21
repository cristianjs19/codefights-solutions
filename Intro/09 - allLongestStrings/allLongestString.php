<?php 

function allLongestStrings($inputArray) {
    $higher = 0;
    for($i=0; $i<count($inputArray); $i++){
        $a = strlen($inputArray[$i]);
        if($a >= $higher){
            if($a > $higher) $res = [];
            $res[] = $inputArray[$i];
            $higher = $a;
            
            
        }    
    }
    
    
    return $res;
    
}

 ?>