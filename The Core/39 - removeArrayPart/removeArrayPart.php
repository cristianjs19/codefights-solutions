<?php

function removeArrayPart($inputArray, $l, $r) {
    
    $a = $inputArray;
    if($r - $l >= count($inputArray) - 1 ) return $arr = [];
    
    for($i = $l; $i <= $r; $i++){
        unset($inputArray[$i]);
    }
    
   for($i = 0; $i <= count($a) - 1; $i++){
        if($inputArray[$i] == TRUE || $inputArray[$i] === 0){
            $arr[$i-$j] = $inputArray[$i];
        }
        else $j++;
    }
    
    return $arr;

}

?>