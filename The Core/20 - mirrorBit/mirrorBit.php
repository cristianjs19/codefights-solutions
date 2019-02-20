<?php

function mirrorBits($a) {
    
    $a = decbin($a);
    $a = strrev($a);
    $a = bindec($a);
    
    return $a;

}

?>