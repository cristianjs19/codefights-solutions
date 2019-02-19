<?php 

function seatsInTheater($nCols, $nRows, $col, $row) {

    $xCols = $nCols - $col;
    $xRows = $nRows - $row;
    
    $p = ++$xCols * $xRows;
    return $p;
    
}

?>