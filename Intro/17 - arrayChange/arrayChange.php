<?php  

function arrayChange($inputArray) {
    $c = 0;
    for($i=0;$i<count($inputArray)-1;$i++){
        if($inputArray[$i] >= $inputArray[$i+1]){
            $dif = $inputArray[$i] - $inputArray[$i+1] +1;
            $inputArray[$i+1] += $dif;
            $c += $dif;
        }
    }
    
    return $c;
    
}

?>