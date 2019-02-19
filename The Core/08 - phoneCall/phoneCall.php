<?php

function phoneCall($min1, $min2_10, $min11, $s) {
    
    $min = 0;
    $s = $s - $min1;
    if ($s < 0){
        return $min;
    }
    else { $min++; }
    while($s >= $min2_10 && $min < 10){
        $s = $s - $min2_10;
        $min++;
    }
    while($s >= $min11 && $min >= 10){
        $s = $s - $min11;
        $min++;
    }
    return $min;
}

?>