<?php

function rangeBitCount($a, $b) {

    $arr = array($a);
    for($i=$a ; $i <= $b - 1 ; $i++ ){
        $arr[] = ++$a; 
    }
    
    $arr = array_map("decbin", $arr);
    $arr = array_map("str_split", $arr);
    $arr = array_map("array_sum", $arr);
    $arr = array_sum($arr);
    
    return $arr;

}

?>