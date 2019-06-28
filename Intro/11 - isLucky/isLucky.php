<?php 

function isLucky($n) {
    
    $t = str_split($n);
    $a = count($t)/2;
    
    for($i=0;$i<=$a-1;$i++){
        $t1[$i] += $t[$i];
        #array_splice($t,$i,$i);
        unset($t[$i]);
    }
    
    $t = array_sum($t);
    $t1 = array_sum($t1);
    
    if($t == $t1) return TRUE;
    else return FALSE;

}

 ?>