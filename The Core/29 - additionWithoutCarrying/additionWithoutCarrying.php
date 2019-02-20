<?php

function additionWithoutCarrying($param1, $param2) {
    
    $arr1 = array_reverse(str_split($param1));
    $arr2 = array_reverse(str_split($param2));
    
    for($i = 4; $i >= 0 ; $i--){
        if($arr1[$i] || $arr2[$i] == TRUE){
            if($arr1[$i] == TRUE) $res[$i] = $arr1[$i];
            elseif($arr2[$i] == TRUE) $res[$i] = $arr2[$i];
        }    
    }
    
    for($i = 0; $i <= 4; $i++){
        if($arr1[$i] == TRUE && $arr2[$i] == TRUE)
        $res[$i] = $arr1[$i] + $arr2[$i];
        $res[$i] = array_reverse(str_split($res[$i]));
        $res[$i] = $res[$i][0];
    }
    
    return intval(implode($res));
}

?>