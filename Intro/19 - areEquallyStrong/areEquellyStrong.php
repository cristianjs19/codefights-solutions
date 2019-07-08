<?php 

function areEquallyStrong($yourLeft, $yourRight, $friendsLeft, $friendsRight) {

    $my = $yourLeft + $yourRight;
    $friend = $friendsLeft + $friendsRight;
    $maxMy = max(array($yourLeft,$yourRight));
    $maxFriend = max(array($friendsLeft,$friendsRight));
    
    if($maxMy != $maxFriend) return FALSE;
    elseif( $my == $friend && $maxMy == $maxFriend) return TRUE;
    else return FALSE;
}


 ?>