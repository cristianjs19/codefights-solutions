<?php

function lineUp($commands) {
    
    $count = 0;
    
    $arr = str_split($commands);
    $arr2 = str_split($commands);
    
    if($commands == "") return 0;
    
    for($i = 0; $i <= count($arr) - 1; $i++){
        if($arr[$i]== "R"){
            if($i == 0) $arr[$i] = 1;
            if($i >= 1) $arr[$i] = $arr[$i - 1] + 1;
        }elseif($arr[$i]== "L"){
            if($i == 0) $arr[$i] = -1;
            if($i >= 1) $arr[$i] = $arr[$i - 1] - 1;
        }elseif($arr[$i]== "A"){
            if($i == 0) $arr[$i] = +2;
            if($i >= 1) $arr[$i] = $arr[$i - 1] + 2;
        }    
        
        if($arr[$i] > 3) $arr[$i] -= 4;
        if($arr[$i] < 0) $arr[$i] += 4;
    }
    
    for($i = 0; $i <= count($arr2) - 1; $i++){
        if($arr2[$i]== "R"){
            if($i == 0) $arr2[$i] = -1;
            if($i >= 1) $arr2[$i] = $arr2[$i - 1] - 1;
        }elseif($arr2[$i]== "L"){
            if($i == 0) $arr2[$i] = 1;
            if($i >= 1) $arr2[$i] = $arr2[$i - 1] + 1;
        }elseif($arr2[$i]== "A"){
            if($i == 0) $arr2[$i] = -2;
            if($i >= 1) $arr2[$i] = $arr2[$i - 1] - 2;
        }    
        
        if($arr2[$i] > 3) $arr2[$i] -= 4;
        if($arr2[$i] < 0) $arr2[$i] += 4;
    }
    
    for($i = 0; $i <= count($arr) - 1; $i++){
        if($arr[$i] == $arr2[$i]) $count += 1;
    }

    return $count;
}

?>