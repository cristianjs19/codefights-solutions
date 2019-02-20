<?php

function leastFactorial($n) {
    if($n == 1) return $n;
    if($n == 2) return $n;
    if($n >= 3 && $n <= 6) return 6;
    if($n >= 7 && $n <= 24) return 24;
    if($n >= 25 && $n <= 120) return 120;
}

?>

