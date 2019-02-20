<?php

function makeArrayConsecutive2($statues) {

    $val1 = max($statues);
    $val2 = min($statues);
    $arraySize = ($val1 - $val2) + 1;
    $arrayElements = count($statues);
    $arrayComplete = $arraySize - $arrayElements;
    
    return $arrayComplete;
}

?>