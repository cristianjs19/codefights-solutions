<?php

function increaseNumberRoundness($n) {
    
    $arr = array_reverse(str_split($n));
    $cond = 0;
    
    print_r($arr);
    
    for( $i = 0; $i <= count($arr) - 1; $i++){
        #$j = $i;
        if($arr[$i] != 0) {
            for( $j = $i + 1; $j <= count($arr) - 1; $j++){
                if($arr[$j] == 0) return TRUE;
            }
        }    
    }
    
    return FALSE;
}

?>