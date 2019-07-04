<?php 

function palindromeRearranging($inputString) {
    
    $arr = str_split($inputString);
    $h = array_count_values($arr);
    $odd = 0;
    
    foreach($h as $letra=>$cantidad){
    	$c[] += $cantidad;
	}
    
    foreach($c as $i){
        if($i % 2 == 0);
        else $odd++;
    }

    if($odd > 1) return FALSE;
    else return TRUE;
    
}

 ?>