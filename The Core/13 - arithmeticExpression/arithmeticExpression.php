<?php

function arithmeticExpression($a, $b, $c) {

    if($a + $b == $c || $a - $b == $c || $a * $b == $c || $a / $b == $c) return TRUE;
    return FALSE;
        
 }

?>