<?php

function isInfiniteProcess($a, $b) {

    while($a != $b){
        ++$a;
        --$b;
        if($a > $b) break;
    }
    return $a != $b ? TRUE : FALSE;
}

?>