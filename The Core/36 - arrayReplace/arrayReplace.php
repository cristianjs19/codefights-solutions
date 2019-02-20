<?php

function arrayReplace($inputArray, $elemToReplace, $substitutionElem) {
    
    for($i = 0; $i <= count($inputArray) - 1; $i++){
        if($inputArray[$i] == $elemToReplace){
            $inputArray[$i] = $substitutionElem;
        }
    }
    
    return $inputArray;
}

?>