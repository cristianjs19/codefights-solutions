<?php

function willYou($young, $beautiful, $loved) {
    
    if(($young == FALSE || $beautiful == FALSE) && $loved == TRUE) return TRUE;
    if(($young == TRUE && $beautiful == TRUE) && $loved == FALSE) return TRUE;
    return FALSE;

}

?>