<?php

function magicalWell($a, $b, $n) {
    $money = 0;
    for($i = 1; $i <= $n; $i++){
        $money += $a * $b;
        $a++;
        $b++;
    }
    return $money;
}

?>