<?php 

function largestNumber($n) {

    $num = "";
    
    if ($n >= 1){
        for ($i = 1; $i <= $n; $i++){
            $num = $num . 9;
        }
    }
    
    return intval($num);
}

?>