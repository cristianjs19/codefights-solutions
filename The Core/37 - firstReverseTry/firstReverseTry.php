<?php

function firstReverseTry($arr) {
    
    $s = $arr[0];
        
    if(count($arr) > 1){
        $arr[0] = $arr[count($arr) - 1];
        $arr[count($arr) - 1] = $s;
    }
    
    return $arr;

}

?>