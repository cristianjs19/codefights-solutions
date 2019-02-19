<?php

function maxMultiple($divisor, $bound) {
    
    $m = $bound % $divisor;
    
    return $bound - $m;

}

?>