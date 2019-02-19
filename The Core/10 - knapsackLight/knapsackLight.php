<?php

function knapsackLight($value1, $weight1, $value2, $weight2, $maxW) {

    if($weight1 + $weight2 <= $maxW){
        return $value1 + $value2;
    }elseif($value1 >= $value2 && $weight1 <= $maxW || $weight2 > $maxW && $weight1 <= $maxW){ 
        return $value1;
    }elseif($value2 > $value1 && $weight2 <= $maxW || $weight1 > $maxW && $weight2 <= $maxW){ 
        return $value2;
    }else{return 0;}
    
}

?>