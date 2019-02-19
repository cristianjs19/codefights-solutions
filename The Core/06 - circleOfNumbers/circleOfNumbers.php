<?php

function circleOfNumbers($n, $firstNumber) {
    
    $ns = ($n/2)-1;
    $num = ($firstNumber+$ns)+1;
    
    if($num > $n-1){
        $num = ($firstNumber - $ns) - 1;
    }
    
    return $num;

}

?>