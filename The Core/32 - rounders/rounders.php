<?php

function rounders($n) {

    $x = strval($n);
    $x1 = str_split(strrev($x));
    
    for($i = 0; $i <= count($x1); $i++){
        
        if($i >= count($x1) - 1 && $x1[$i] < 9){
            $x1 = implode($x1);
            $x1 = strrev($x1);
            $x1 = intval($x1);
            return $x1;
        }
        elseif($x1[$i] <= 4) $x1[$i] = 0;
        elseif($x1[$i] >= 5){
            $x1[$i] = 0;
            $x1[$i + 1] += 1;
        }
    }
}

?>