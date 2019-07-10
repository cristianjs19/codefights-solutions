<?php 

function arrayMaximalAdjacentDifference($inputArray) {
    
    for($i=0;$i<count($inputArray)-1;$i++){
        if($inputArray[$i] < $inputArray[$i+1]){
            $dif[] = $inputArray[$i+1] - $inputArray[$i];
        }
        elseif($inputArray[$i] > $inputArray[$i+1]){
            $dif[] = $inputArray[$i] - $inputArray[$i+1];
        }
        else $dif[] = 0;
    }
    
    return max($dif);

}

 ?>