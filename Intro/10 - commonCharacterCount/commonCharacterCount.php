<?php 

function commonCharacterCount($s1, $s2) {
    $s1 = str_split($s1);
    $s2 = str_split($s2);
    $count = 0;
    foreach ($s1 as $char1 => $value1) {
        foreach ($s2 as $char2 => $value2) {
            if ($value1 == $value2) {
                $count++;
                unset($s2[$char2]);
                break;
            }
        }       
    }
    return $count;
}

 ?>