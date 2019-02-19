<?php

function extraNumber($a, $b, $c) {
    
    if($a == $b){
        return $c;
    }elseif($a == $c){
        return $b;
    }else{return $a;}

}

?>