<?php

function metroCard($lastNumberOfDays) {
    
    $d = array(28,30,31);
    if($lastNumberOfDays == 30 || $lastNumberOfDays == 28){$d = array(31);}
    return $d;

}


?>