<?php

function centuryFromYear($year) {
    
    $i = $year;
    
    $i = ($i-1)/100;
    
    return intval(++$i);
    
}