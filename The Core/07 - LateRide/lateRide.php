<?php

function lateRide($n) {

    $h = array_sum(str_split(intval($n / 60)));
    $m = array_sum(str_split($n % 60));
    
    return $h + $m;
    
}

?>