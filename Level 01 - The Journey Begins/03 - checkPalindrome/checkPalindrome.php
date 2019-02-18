<?php

function checkPalindrome($inputString) {

    $stringreverse = strrev($inputString);
    if($inputString == $stringreverse){
        return TRUE;
    }else{
        return FALSE;
    }
    
}
