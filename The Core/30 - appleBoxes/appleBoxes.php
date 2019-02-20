<?php

function appleBoxes($k) {
    
    
    for($i = 1; $i <= $k; $i++){
        if($i % 2 == 1) $odd[] += $i;
        elseif($i % 2 == 0) $even[] += $i;
    }
    
    for($i = 0; $i <= count($odd) - 1; $i++){
        if($odd[$i] == TRUE) $odd[$i] = $odd[$i] * $odd[$i];
        if($even[$i] == TRUE) $even[$i] = $even[$i] * $even[$i];
    }
    
    $totalEven = array_sum($even);
    $totalOdd = array_sum($odd);
    
    return $totalEven - $totalOdd;
    
}

?>