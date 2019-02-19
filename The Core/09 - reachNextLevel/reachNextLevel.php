<?php

function reachNextLevel($experience, $threshold, $reward) {

    $xp = $experience + $reward;
    return $xp >= $threshold ? TRUE : FALSE;
    
}

?>