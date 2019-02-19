<?php

function adjacentElementsProduct($inputArray) {
    $prod = $inputArray[0] * $inputArray[1];
    
    for ($i = 1; $i< count($inputArray) - 1;$i++) {
        $prod = max($prod, $inputArray[$i] * $inputArray[$i+1]);
    }
    
    return $prod;
}


