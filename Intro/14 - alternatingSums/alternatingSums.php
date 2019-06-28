<?php 

function alternatingSums($a) {
    
    for($i=0;$i<count($a);$i++){
        if(count($a) == 1) return $ans = [$a[0],0];
        if($i % 2 == 0) $t1[] = $a[$i];
        else $t2[] = $a[$i];
        
    }
    
    $ans = array(array_sum($t1), array_sum($t2));
    
    return $ans;
}

 ?>