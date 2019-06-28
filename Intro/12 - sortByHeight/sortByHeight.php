<?php 

function sortByHeight($a) {

    for($i=0;$i<count($a);$i++){
        if($a[$i] != -1){
            $sort[$i] += $a[$i];
        }
    }
    sort($sort);
    $j = 0;
    for($i=0;$i<count($a);$i++){
        if($a[$i] != -1){
            $a[$i] = $sort[$j];
            $j++;
        }
    }
    
    return $a;
}

 ?>