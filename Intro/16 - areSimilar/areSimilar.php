<?php 

function areSimilar($a, $b) {
    
    for($i=0;$i<count($a);$i++){
        if($a[$i] != $b[$i]){
            $s = array_search($a[$i], $b);
            $c = $b[$i];
			if($s != FALSE){
				$b[$i] = $a[$i];
                for($s;$s<count($b);$s++){
                    if($b[$s] == $a[$s]);
                    else { $b[$s] = $c;
                          break;
                         }
                }
				break;
			}
            else return FALSE;
        }
    }

    for($i=0;$i<count($a);$i++){
        if($a[$i] == $b[$i]);
        else return FALSE;
    }

    return TRUE;  

}

 ?>